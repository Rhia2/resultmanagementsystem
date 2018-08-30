<?php

namespace App\Http\Controllers;

use App\Result;
use App\Course;
use App\User;
use App\Students;
use Session;
use App\Sch_session;
use Carbon\Carbon;
use Auth;
use Mail;
use Excel;
use PDF;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::groupBy('department_id')->get();
        return view('results.view',compact('results'));
    }

    public function editR()
    {
        return view('results.editResult');
    }

    // deleting this after i joined to model
    public function result(User $id)
    {
        $date = date("Y/m/d");
        $student_details = Students::where('user_id',$id->id)->get();
        foreach($id->result as $result){
            if($result->semester == '1'){
                $student_courses = explode(',',$student_details[0]->first_course_id);
            }elseif($result->semester == '2'){
                $student_courses = explode(',',$student_details[0]->second_course_id);
            }
        }

        $std_courses_unit = 0;

        for ($i=0; $i < sizeof($student_courses); $i++) { 
            $std_courses = Course::select('unit')->where('id',$student_courses[$i])->get();
            $std_courses_unit += $std_courses[0]->unit;
        }

        return view('results.viewResult',compact('id','date','std_courses_unit'));
    }

    public function pdfview($id)
    {
        $date = date("Y/m/d");
        $id = User::find($id);
        $student_details = Students::where('user_id',$id->id)->get();
        foreach($id->result as $result){
            if($result->semester == '1'){
                $student_courses = explode(',',$student_details[0]->first_course_id);
            }elseif($result->semester == '2'){
                $student_courses = explode(',',$student_details[0]->second_course_id);
            }
        }

        $std_courses_unit = 0;

        for ($i=0; $i < sizeof($student_courses); $i++) { 
            $std_courses = Course::select('unit')->where('id',$student_courses[$i])->get();
            $std_courses_unit += $std_courses[0]->unit;
        }
        $data =[
            'id' => $id,
            'date' => $date,
            'std_courses_unit' => $std_courses_unit,
        ];
        $pdf = PDF::loadView('results.resultPdf',$data);
        return $pdf->download('Result.pdf');
        
    }

    public function print($id)
        {
            $date = date("Y/m/d");
            $id = User::find($id);
            $student_details = Students::where('user_id',$id->id)->get();
            foreach($id->result as $result){
                if($result->semester == '1'){
                    $student_courses = explode(',',$student_details[0]->first_course_id);
                }elseif($result->semester == '2'){
                    $student_courses = explode(',',$student_details[0]->second_course_id);
                }
            }

            $std_courses_unit = 0;

            for ($i=0; $i < sizeof($student_courses); $i++) { 
                $std_courses = Course::select('unit')->where('id',$student_courses[$i])->get();
                $std_courses_unit += $std_courses[0]->unit;
            }
            $data =[
                'id' => $id,
                'date' => $date,
                'std_courses_unit' => $std_courses_unit,
            ];
            $pdf = PDF::loadView('results.resultPdf',$data);
            return $pdf->stream('Result.pdf');
            
        }

    // public function exportPDF()
	// {
    //    $result = array();
    //    $id = Auth::user()->id;
	//    $data = User::where('id',$id)->get();
	//    return Excel::create('Result', function($excel) use ($data) {
	// 	$excel->sheet('mySheet', function($sheet) use ($data)
	//     {
	// 		$sheet->fromArray($data);
	//     });
	//    })->download("pdf");
	// }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $dept_id = Auth::user()->department_id;
        $courses= Course::where('department_id',$dept_id)->get();
        $sessions = Sch_session::all();
        return view('results.courseSelection',compact('courses','sessions'));
    }

    public function generateStd(Request $request)
    {
        $course = $request['course'];
        $set = $request['session'];
        $students = Students::whereRaw("FIND_IN_SET($course, course_id)")->where('session', $set)->get();
        return redirect('results/compute')->with('students',$students)->with('course',$course);
    }

    public function compute()
    {
        $students = Session::get('students');
        $course = Session::get('course');
        $semester = Course::select('semester')->where('id',$course)->first();
        return view('results.createResult',compact('students','course','semester'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'session' => 'required'
        ]);

        $input = $request->all();
        $courses = Course::select('unit')->where('id', $input['course'])->get();
        for($i=0; $i<= count($input['student']); $i++) {
            if(isset($input['student'][$i])){
                $point = [];
                if($input['score'][$i] >= 70){
                    $point[$i] = $courses[0]->unit * 5;
                }elseif ($input['score'][$i] >= 60 && $input['score'][$i] <= 69) {
                    $point[$i] = $courses[0]->unit * 4;
                }elseif ($input['score'][$i] >= 50 && $input['score'][$i] <= 59) {
                    $point[$i] = $courses[0]->unit * 3;
                }elseif ($input['score'][$i] >= 40 && $input['score'][$i] <= 49) {
                    $point[$i] = $courses[0]->unit * 2;
                }elseif ($input['score'][$i] >= 30 && $input['score'][$i] <= 39) {
                    $point[$i] = $courses[0]->unit * 1;
                }elseif ($input['score'][$i] >= 0 && $input['score'][$i] <= 29) {
                    $point[$i] = $courses[0]->unit * 0;
                }
                $data = [
                'student_id' => $input['student'][$i],
                'department_id' => $input['department'][$i],
                'point' => $point[$i],
                'score' => $input['score'][$i],
                'course_id' => $input['course'],
                'session' => $input['session'],
                'semester' => $input['semester'],
                'submitted_by' => Auth::user()->id,
                ];
          
            Result::create($data);
           }
          }
          Session::flash('message', "result saved!");
          return redirect()->action('ResultController@create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        $sum = 0;
        $department = $result->department->name;
        $students = User::has('result')->with('result')->with('student')->where('department_id',$result->department_id)->where('student_set',$result->session)->get();
        $courses = Course::where('department_id',$result->department_id)->where('semester',$result->semester)->get();
        $course = Course::where('department_id',$result->department_id)->where('semester',$result->semester)->count();
        
        foreach($courses as $c){
            $sum += $c->unit;
        }
        foreach($students as $student){
            $id = $student->id;
            $student_details = Students::where('user_id',$student->id)->get();

            if($result->semester == '1'){
                $student_courses = explode(',',$student_details[0]->first_course_id);
            }elseif($result->semester == '2'){
                $student_courses = explode(',',$student_details[0]->second_course_id);
            }
        }

        $std_courses_unit = 0;

        for ($i=0; $i < sizeof($student_courses); $i++) { 
            $std_courses = Course::select('unit')->where('id',$student_courses[$i])->get();
            $std_courses_unit += $std_courses[0]->unit;
        }

        return view('results.viewDeptResult', compact('students','courses','course','department','sum','id','std_courses_unit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        return view('results.editResult');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function updateResult(Request $request)
    {
        if(Auth::user()->roles[0]->name == 'Exam officer'){
            $approved = '1';
        }elseif (Auth::user()->roles[0]->name == 'Hod') {
            $approved = '2';
        }
        $user =  $request['user_id'];
        $result = Result::where('student_id',$user)->first();
        $students = User::where('department_id', $result->department_id)->where('student_set', $result->session)->get();
        Result::where('department_id', $result->department_id)->where('session', $result->session)->where('semester', $result->semester)
        ->update(['approved' => $approved]);
        if(Auth::user()->roles[0]->name == 'Exam officer'){
            Session::flash('message', "Result will be sent to Hod");
        }elseif (Auth::user()->roles[0]->name == 'Hod') {
            Session::flash('message', "Releasing result to students");
            foreach($students as $user){
                Mail::to($user->guardian_email,$user->email)->send(new \App\Mail\parentNotif($user));
            }
        }
        
        return redirect()->back();
    }

    public function rejectResult(Request $request)
    {
        if(Auth::user()->roles[0]->name == 'Exam officer'){
            $approved = '3';
        }elseif (Auth::user()->roles[0]->name == 'Hod') {
            $approved = '4';
        }
        $user =  $request['user_id'];
        $reason = $request['reason'];
        $result = Result::where('student_id',$user)->first();
        $students = User::where('department_id', $result->department_id)->where('student_set', $result->session)->get();
        Result::where('department_id', $result->department_id)->where('session', $result->session)->where('semester', $result->semester)
        ->update(['approved' => $approved,'reject_reason' => $reason]);
        if(Auth::user()->roles[0]->name == 'Exam officer'){
            Session::flash('message', "Course adviser will be notified with reason");
        }elseif (Auth::user()->roles[0]->name == 'Hod') {
            Session::flash('message', "Exam officer will be notified with reason");
        }
        
        return redirect()->back();
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}

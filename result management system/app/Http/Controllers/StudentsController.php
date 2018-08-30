<?php

namespace App\Http\Controllers;

use App\Students;
use App\User;
use App\Course;
use Mail;
use Session;
use App\Departments;
use App\Sch_session;
use Illuminate\Support\Facades\Validator;
use Ultraware\Roles\Models\Role;
use Illuminate\Http\Request;
use Auth;

class StudentsController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = User::whereHas('roles', function ($query){
                        $query->where('roles.name', '=', 'Student');
                    })->get();
        return view('students.view-list',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $schsessions = Sch_session::all();
        $roles = Role::all();
        $departments = Departments::all();
        return view('students.addNew',compact('roles','departments','schsessions'));
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'matric_no' => 'required',
            'department' => 'required',
            'std_set' => 'required',
            'std_type' => 'required',
            'guardian_email' => 'required',
        ]);

        $user =  User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'id_no' => $request['matric_no'],
            'department_id' => $request['department'],
            'student_type' => $request['std_type'],
            'student_set' => $request['std_set'],
            'guardian_email' => $request['guardian_email']
        ]);
        

        $role = Role::where('name', '=', 'Student')->first();  
        $user->attachRole($role);
        Mail::to($user->email)->send(new \App\Mail\Welcome($user));
        Session::flash('message', "Students updated!");
        // return back()->with('status', 'Students updated!');
        return redirect()->back();
    }

    public function course()
    {  
        $courses = Session::get('courses');
        $semester = Session::get('semester');
        return view('students.courseReg',compact('courses','semester'));
    }

    public function preStore(Request $request)
    {
        $dept_id = Auth::user()->department_id;
        $semester = $request['semester'];
        $courses = Course::where([
                'department_id' => $dept_id,
                'semester' => $semester
                ])->get();
        return back()->with('courses', $courses )->with('semester',$semester);
    }

    public function storeStdCourses(Request $data)
    {   if($data['semester'] == '1'){
            $id = Auth::user()->id;
            $session = User::select('student_set')->where('id',$id)->get();
            $course_id = implode(",", $data['course']);
            Students::create([
                'first_course_id' => $course_id,
                'user_id' => $id,
                'session' => $session[0]->student_set
            ]);
        }elseif($data['semester'] == '2'){
            $id = Auth::user()->id;
            $session = User::select('student_set')->where('id',$id)->get();
            $course_id = implode(",", $data['course']);
            Students::create([
                'second_course_id' => $course_id,
                'user_id' => $id,
                'session' => $session[0]->student_set
            ]);
        }

            Session::flash('message', "courses registered!");
            return redirect()->back();
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function show(Students $students)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function destroy(Students $students)
    {
        //
    }
}

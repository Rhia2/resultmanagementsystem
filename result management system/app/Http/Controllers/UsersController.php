<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use Mail;
use Auth;
use Session;
use App\Departments;
use Ultraware\Roles\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {   
        $users = User::all();
        return view('users.viewUsers',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected function storeUsers(Request $data)
    {
        $this->validate($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'id_no' => 'required',
            'department' => 'required',
            'role' => 'required'
        ]);

        $user =  User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'id_no' => $data['id_no'],
            'department_id' => $data['department']
        ]);
        
        $role_id = $data['role'];
        $role = Role::where('id', '=', $role_id)->first();  
        $user->attachRole($role);

        Mail::to($user->email)->send(new \App\Mail\Welcome($user));

        return back()->with('status', 'Users updated!');
    }

    public function create()
    {
        $roles = Role::all();
        $departments = Departments::all();
        return view('users.addUsers',compact('roles','departments'));
    }

    //deleting profile and edit after connecting to db
    public function profile()
    {
        $id = Auth::user()->id;
        $user = User::where('id',$id)->first();
        if(empty($user->student->first_course_id)){
            $first_semester_course = 'empty';
        }
        $first_course_id = explode(',',$user->student->first_course_id);
        $first_semester_course = Course::whereIn('id', $first_course_id)->get();
        if(empty($user->student->second_course_id)){
            $second_semester_course = 'empty';
        }
        $second_course_id = explode(',',$user->student->second_course_id);
        $second_semester_course = Course::whereIn('id', $second_course_id)->get();
        //dd($first_semester_course);
        return view('users.profile', compact('user','second_semester_course','first_semester_course'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users.editProfile', ['user' => User::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'birthday' => $request['birthday'],
            'address' => $request['address'],
            'gender' => $request['gender'],
            'phone' => $request['phone'],
            'id_no' => $request['id_no']
        ]);

        Session::flash('message', "profile updated!");
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

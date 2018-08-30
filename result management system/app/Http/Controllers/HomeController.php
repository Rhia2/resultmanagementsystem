<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Result;
use App\Departments;
use App\Students;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::count();
        $students = Students::count();
        $tresult = Result::count();
        $department = Departments::count();
        $results = Result::groupBy('department_id')->get();
        return view('index',compact('results','user','students','tresult','department'));
    }

}

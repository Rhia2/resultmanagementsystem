<?php

namespace App\Http\Controllers;

use App\Colleges;
use Auth;
use App\User;
use Illuminate\Http\Request;

class CollegesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $colleges = Colleges::all();
        return view('colleges.viewColleges',compact('colleges'));
    }

    public function staff()
    {
        return view('colleges.staff');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('colleges.addStaff');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeCollege(Request $request)
    {
        $this->validate($request, [
            'college' => 'required'
        ]);
        // $college = Colleges::create($request->all());
        Colleges::create([
            'name' => $request['college']
        ]);
        return back()->with('status', 'College updated!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\colleges  $colleges
     * @return \Illuminate\Http\Response
     */
    public function show(colleges $colleges)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\colleges  $colleges
     * @return \Illuminate\Http\Response
     */
    public function edit(colleges $colleges)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\colleges  $colleges
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, colleges $colleges)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\colleges  $colleges
     * @return \Illuminate\Http\Response
     */
    public function destroy(colleges $colleges)
    {
        //
    }
}

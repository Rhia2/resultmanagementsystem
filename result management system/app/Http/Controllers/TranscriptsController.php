<?php

namespace App\Http\Controllers;

use App\Transcripts;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Result;
use Session;
class TranscriptsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('transcripts.requests');
    }

    public function generate()
    {
        $students = Session::get('student');
        return view('transcripts.transcriptView',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_no = $request['mat_no'];
        $student  = User::where('id_no',$id_no)->with('result')->get();
        return redirect('/generatedTranscript')->with('student', $student );
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transcripts  $transcripts
     * @return \Illuminate\Http\Response
     */
    public function show(Transcripts $transcripts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transcripts  $transcripts
     * @return \Illuminate\Http\Response
     */
    public function edit(Transcripts $transcripts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transcripts  $transcripts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transcripts $transcripts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transcripts  $transcripts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transcripts $transcripts)
    {
        //
    }
}

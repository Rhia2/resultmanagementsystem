@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection
@section('content')
@if (Session::has('students'))
<div class="row">
    <div class="col-sm-8">
        <h4 class="page-title">Create Result</h4>
    </div>
</div>
<div class="row">
    <form action="{{url('/saveResult')}}" method="post">
    {{ csrf_field() }}
        <div class="col-md-8 col-sm-8 col-xs-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover table-white ">
                            <thead>
                                <tr>
                                    <th class="col-sm-3">Matric No</th>
                                    <th class="col-md-4">Student Name</th>
                                    <th class="col-md-3">Score</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                <tr>
                                    <td>
                                        {{$student->user->id_no}}
                                        <input type="hidden" value="{{$student->user->id}}" name="student[]">
                                        <input type="hidden" value="{{$student->user->department_id}}" name="department[]">
                                    </td>
                                    <td>
                                        {{$student->user->name}}
                                        <input type="hidden" value="{{$student->session}}" name="session">
                                        <input type="hidden" value="{{$semester->semester}}" name="semester">
                                    </td>
                                    <td>
                                        @if (Session::has('course'))
                                        <input type="hidden" value="{{$course}}" name="course">
                                        @endif
                                        <input class="form-control" style="width:100px" type="text" name="score[]">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button class="btn btn-primary">Save Result</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endif
@endsection
@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection
@section('content')
<div class="row">
    <div class="col-sm-8">
        <h4 class="page-title">Create Result </h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-md-offset-2">
        <form name="form" action="{{url('/generate')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label>Session <span class="text-danger">*</span></label>
                        <select class="select" name="session" required>
                            <option>Please Select</option>
                            @foreach($sessions as $session)
                            <option value="{{$session->id}}">{{$session->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-8">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4> Please select a course</h4>
                            <small style="color:red">Please select the session you are submitting result for</small>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-white table-bordered mydatatable">
                                    <thead>
                                        <tr>
                                            <th class="col-xs-1"></th>
                                            <th class="col-xs-3">Course code</th>
                                            <th class="col-md-4">Course</th>
                                            <th>semester</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($courses as $course)
                                        <tr>
                                            <td><input type="radio" name="course" value="{{$course->id}}" onchange="this.form.submit()"></td>
                                            <td>{{$course->course_code}}</td>
                                            <td>{{$course->title}}</td>
                                            <td> @if($course->semester == 1)
                                                <span class="label label-warning-border">  1st semester<span>
                                                @elseif($course->semester == 2)
                                                <span class="label label-danger-border">2nd semester<span>
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                        <!-- <tr>
                                            <td>Mth 101</td>
                                            <td>Engineering math</td>
                                            <td>Mr yerima</td>
                                            <td><a class="btn btn-xs btn-primary" href="{{url('/results/compute')}}">Pull student</a></td>
                                        </tr> -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
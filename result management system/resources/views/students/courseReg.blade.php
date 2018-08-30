@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 

@include('partials.error')

<div class="row">
    <div class="col-xs-4">
        <h4 class="page-title">Select your courses for this semester</h4>
    </div>
</div>
<div class="row filter-row">

    <form class="m-b-30" action="{{url('/selectSession')}}"  method="POST">
    {{ csrf_field() }}
        <div class="col-sm-6 col-xs-6"> 
            <div class="form-group form-focus select-focus">
            <label class="control-label">Semester</label>
            <select class="select" name="semester" >
                <option>select semester</option>
                <option value="1">1st semester</option>
                <option value="2">2nd semester</option>
            </select>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6">  
            <button type="submit" class="btn btn-success btn-block"> Search </button>  
        </div> 
    </form>
</div>

    

<div class="row">
	<div class="col-md-6 offset-md-3">
        <form class="m-b-30" action="{{url('/courseReg')}}" method="POST">
            {{ csrf_field() }}
            @if (Session::has('semester'))
                <input type="hidden" name="semester" value="{{$semester}}"/>
            @endif
            
            @if (Session::has('courses'))
            <div class="panel panel-default">
                <div class="panel-heading">
                    <strong> Courses</strong>
                </div>
                <div class="panel-body">
                    <ul class="list-group list-group-flush">
                        @foreach($courses as $course)
                        <li class="list-group-item course-selection">
                        {{$course->course_code}} &nbsp; &nbsp; &nbsp; {{$course->title}} 
                            <label class="checkbox">
                                <input type="checkbox" name="course[]" value="{{$course->id}}"/>
                                <span class="success"></span>
                            </label>
                        </li>
                        @endforeach
                    </ul>
                </div> 
            </div>
            <div class="m-t-20 text-center">
                <button class="btn btn-primary">Register course</button>
            </div>
            @endif
        </form>
    </div>
</div>


@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
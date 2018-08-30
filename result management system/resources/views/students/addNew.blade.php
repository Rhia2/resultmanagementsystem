@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
@if (Session::has('message'))
   <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
<div class="row">
    <div class="col-xs-4">
        <h4 class="page-title">Add Student</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <form class="m-b-30" action="{{url('/students')}}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('std_set') ? ' has-error' : '' }}">
                        <label class="control-label">Set</label>
                        <select class="select" name="std_set" required>
                            <option>Select Set</option>
                            @foreach($schsessions as $schsession)
                            <option value="{{$schsession->id}}">{{$schsession->name}}</option>
                            @endforeach
                        </select>
                            @if ($errors->has('std_set'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('std_set') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('department') ? ' has-error' : '' }}">
                        <label class="control-label">Department</label>
                        <select class="select" name="department" required>
                            <option>Select deparments</option>
                            @foreach($departments as $department)
                            <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach>
                        </select>
                            @if ($errors->has('department'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('department') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="control-label">Fullname <span class="text-danger">*</span></label>
                        <input class="form-control" type="text" name="name" required>
                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="control-label">Email <span class="text-danger">*</span></label>
                        <input class="form-control" type="email" name="email" required>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div class="col-sm-6">  
                    <div class="form-group {{ $errors->has('matric_no') ? ' has-error' : '' }}">
                        <label class="control-label">Matric number <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="matric_no" required> 
                            @if ($errors->has('matric_no'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Full-time</label>
                        <select class="select" name="std_type" >
                            <option value="1">Full-time</option>
                            <option value="2">part-time</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">  
                    <div class="form-group">
                        <label class="control-label">Guardian email<span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="guardian_email" required> 
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <input class="form-control" type="password" name="password">
                    </div>
                </div>
                
            </div>
            <div class="m-t-20 text-center">
                <button class="btn btn-primary">Create Student</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
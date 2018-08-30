@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection
@section('content')
<div class="row">
    <div class="col-xs-8">
        <h4 class="page-title">Add Staff</h4>
    </div>
</div>

<form class="m-b-30">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">First Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Last Name</label>
                <input class="form-control" type="text">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Username <span class="text-danger">*</span></label>
                <input class="form-control" type="text">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Password</label>
                <input class="form-control" type="password">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Confirm Password</label>
                <input class="form-control" type="password">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Phone </label>
                <input class="form-control" type="text">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Department</label>
                <select class="select">
                    <option>Admin</option>
                    <option>Course adviser</option>
                    <option>Exam officer</option>
                    <option>Hod</option>
                    <option>Student</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">College</label>
                <select class="select">
                    <option>Global Technologies</option>
                    <option>Delta Infotech</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">  
            <div class="form-group">
                <label class="control-label">Staff ID <span class="text-danger">*</span></label>
                <input type="text" class="form-control floating">
            </div>
        </div>
    </div>
    <div class="m-t-20 text-center">
        <button class="btn btn-primary">Create Staff</button>
    </div>
</form>
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection
@section('content')
<div class="row">
    <div class="col-xs-8">
        <h4 class="page-title">Add User</h4>
        @include('partials.error')
    </div>
</div>

<form class="m-b-30" method="POST" action="{{ url('/addUser') }}">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Full Name <span class="text-danger">*</span></label>
                <input class="form-control" type="text" required name="name">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Email <span class="text-danger">*</span></label>
                <input class="form-control" type="email" name="email" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Department<span class="text-danger">*</span></label>
                <select class="select" name="department" required>
                    <option>Department</option>
                    @isset ($departments)
                        @foreach($departments as $department)
                        <option value="{{$department->id }}">{{$department->name }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
        </div>
        <div class="col-md-6">  
            <div class="form-group">
                <label class="control-label">Identity no <span class="text-danger">*</span></label>
                <input type="text" class="form-control floating" name="id_no" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Confirm Password<span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="password_confirmation" required>
            </div>
        </div>
        
        
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">Role</label>
                <select class="select" name="role">
                    <option>Roles</option>
                    @isset ($roles)
                        @foreach($roles as $role)
                        <option value="{{$role->id }}">{{$role->name }}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
        </div>
    </div>
    <div class="m-t-20 text-center">
        <button class="btn btn-primary">Create User</button>
    </div>
</form>
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
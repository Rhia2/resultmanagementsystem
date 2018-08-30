@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection
@section('content')
<div class="row">
    <div class="col-xs-4">
        <h4 class="page-title">Users</h4>
    </div>
    <div class="col-xs-8 text-right m-b-30">
        <a href="{{url('/users/add')}}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Add User</a>
    </div>
</div>
<div class="row filter-row">
    <div class="col-sm-3 col-xs-6">  
        <div class="form-group form-focus">
            <label class="control-label">Name</label>
            <input type="text" class="form-control floating" />
        </div>
    </div>
    <div class="col-sm-3 col-xs-6"> 
        <div class="form-group form-focus select-focus">
            <label class="control-label">Department</label>
            <select class="select floating"> 
                <option value="">Select Department</option>
                <option>Global Technologies</option>
                <option>Delta Infotech</option>
            </select>
        </div>
    </div>
    <div class="col-sm-3 col-xs-6"> 
        <div class="form-group form-focus select-focus">
            <label class="control-label">Role</label>
            <select class="select floating"> 
                <option value="">Select Role</option>
                <option value="">Web Developer</option>
                <option value="1">Web Designer</option>
                <option value="1">Android Developer</option>
                <option value="1">Ios Developer</option>
            </select>
        </div>
    </div>
    <div class="col-sm-3 col-xs-6">  
        <a href="#" class="btn btn-success btn-block"> Search </a>  
    </div>     
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-striped custom-table datatable">
                <thead>
                    <tr>
                        <th style="width:2%;">s/n</th>
                        <th style="width:30%;">Name</th>
                        <th>Identity code</th>
                        <th>Department</th>
                        <th>Role</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key => $user)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>
                            <a href="{{url('/users/profile')}}" class="avatar">{{ str_limit($user->name, 1 )}}</a>
                            <h2><a href="{{url('/users/profile')}}">{{$user->name}} <span>{{$user->roles[0]->name}}</span></a></h2>
                        </td>
                        <td>{{$user->id_no}}</td>
                        <td>{{$user->department->name}}</td>
                        <td>
                            <span class="label label-danger-border">{{$user->roles[0]->name}}</span>
                        </td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#" data-toggle="modal" data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
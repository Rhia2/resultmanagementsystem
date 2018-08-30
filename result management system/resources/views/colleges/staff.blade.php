@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
    <div class="row">
        <div class="col-xs-4">
            <h4 class="page-title">Staffs</h4>
        </div>
        <div class="col-xs-8 text-right m-b-20">
            <a href="{{url('/staff/add')}}" class="btn btn-primary rounded pull-right"><i class="fa fa-plus"></i> Add Staff</a>
        </div>
    </div>
    <div class="row filter-row">
            <div class="col-sm-3 col-xs-6">  
                <div class="form-group form-focus">
                    <label class="control-label">Student ID</label>
                    <input type="text" class="form-control floating" />
                </div>
            </div>
            <div class="col-sm-3 col-xs-6">  
                <div class="form-group form-focus">
                    <label class="control-label">Student Name</label>
                    <input type="text" class="form-control floating" />
                </div>
            </div>
            <div class="col-sm-3 col-xs-6"> 
                <div class="form-group form-focus select-focus">
                    <label class="control-label">Departments</label>
                    <select class="select floating"> 
                        <option value="">Select Department</option>
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
    <div class="row staff-grid-row">
        <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{url('/users/profile')}}"><img class="avatar" src="assets/img/user.jpg" alt=""></a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
						<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                    </ul>
                </div>
                <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="{{url('/users/profile')}}">John Doe</a></h4>
                <div class="small text-muted">Web Designer</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{url('/users/profile')}}" class="avatar">R</a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
						<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                    </ul>
                </div>
                <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="{{url('/users/profile')}}">Richard Miles</a></h4>
                <div class="small text-muted">Web Developer</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{url('/users/profile')}}" class="avatar">J</a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
						<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                    </ul>
                </div>
                <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="{{url('/users/profile')}}">John Smith</a></h4>
                <div class="small text-muted">Android Developer</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{url('/users/profile')}}" class="avatar">M</a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
						<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                    </ul>
                </div>
                <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="{{url('/users/profile')}}">Mike Litorus</a></h4>
                <div class="small text-muted">IOS Developer</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{url('/users/profile')}}" class="avatar">W</a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
						<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                    </ul>
                </div>
                <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="{{url('/users/profile')}}">Wilmer Deluna</a></h4>
                <div class="small text-muted">Team Leader</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="{{url('/users/profile')}}" class="avatar">J</a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
						<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                    </ul>
                </div>
                <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="{{url('/users/profile')}}">Jeffrey Warden</a></h4>
                <div class="small text-muted">Web Developer</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="#" class="avatar">B</a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
						<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                    </ul>
                </div>
                <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="#">Bernardo Galaviz</a></h4>
                <div class="small text-muted">Web Developer</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="#" class="avatar">L</a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
						<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                    </ul>
                </div>
                <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="#l">Lesley Grauer</a></h4>
                <div class="small text-muted">Team Leader</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="#" class="avatar">J</a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
						<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                    </ul>
                </div>
                <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="#">Jeffery Lalor</a></h4>
                <div class="small text-muted">Team Leader</div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 col-lg-3">
            <div class="profile-widget">
                <div class="profile-img">
                    <a href="#" class="avatar">L</a>
                </div>
                <div class="dropdown profile-action">
                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="#" data-toggle="modal" data-target="#edit_employee"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
						<li><a href="#" data-toggle="modal" data-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                    </ul>
                </div>
                <h4 class="user-name m-t-10 m-b-0 text-ellipsis"><a href="#">Loren Gatlin</a></h4>
                <div class="small text-muted">Android Developer</div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
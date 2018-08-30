@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
    <div class="row">
        <div class="col-xs-4">
            <h4 class="page-title">Students</h4>
        </div>
        <div class="col-xs-8 text-right m-b-30">
            <a href="{{url('/students/add')}}" class="btn btn-primary pull-right rounded"><i class="fa fa-plus"></i> Add Student</a>
        </div>
    </div>
    <div class="row filter-row">
        <div class="col-sm-3 col-xs-6">  
            <div class="form-group form-focus">
                <label class="control-label">Matric no</label>
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
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table datatable">
                    <thead>
                        <tr>
                            <th style="width:5%;">s/n</th>
                            <th style="width:30%;">Name</th>
                            <th>Matric no</th>
                            <th>Department</th>
                            <th>Type</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $key => $student)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>
                                <a href="{{url('/users/profile')}}" class="avatar">{{ str_limit($student->name, 1 )}}</a>
                                <h2><a href="{{url('/users/profile')}}">{{$student->name}} <span>{{$student->roles[0]->name}}</span></a></h2>
                            </td>
                            <td>{{$student->id_no}}</td>
                            <td>{{$student->department->name}}</td>
                            @if($student->student_type == '1')
                            <td><span class="label label-success-border">Full time</span></td>
                            @elseif($student->student_type == '2')
                            <td><span class="label label-success-border">Part time</span></td>
                            @endif
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#" data-toggle="modal" data-target="#edit_student"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#delete_student"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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
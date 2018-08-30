@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
    <div class="row">
        <div class="col-sm-8 col-xs-6">
            <h4 class="page-title">Courses</h4>
            @include('partials.error')
        </div>
        @role('admin')
        <div class="col-sm-4 col-xs-6 text-right m-b-30">
            <a href="#" class="btn btn-primary rounded" data-toggle="modal" data-target="#add_course"><i class="fa fa-plus"></i> Add Course</a>
        </div>
        @endrole
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table m-b-0">
                    <thead>
                        <tr>
                            <th>Course code </th>
                            <th>Course title </th>
                            <th>Department</th>
                            <th>Course weight</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($courses as $course)
                        <tr>
                            <td>{{$course->course_code}}</td>
                            <td>{{$course->title}}</td>
                            <td>{{$course->department->name}}</td>
                            <td>{{$course->unit}}</td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#" data-toggle="modal" data-target="#edit_course" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#delete_course" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
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
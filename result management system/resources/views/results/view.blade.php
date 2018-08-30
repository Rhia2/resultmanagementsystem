@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">Results</h4>
        </div>
        <div class="col-sm-4 text-right m-b-30">
            <a href="{{url('/results/add')}}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Create New Result</a>
        </div>
    </div>
    <div class="row filter-row">
        <div class="col-sm-3 col-xs-6">  
            <div class="form-group form-focus">
                <label class="control-label">From</label>
                <div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6">  
            <div class="form-group form-focus">
                <label class="control-label">To</label>
                <div class="cal-icon"><input class="form-control floating datetimepicker" type="text"></div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6"> 
            <div class="form-group form-focus select-focus">
                <label class="control-label">Status</label>
                <select class="select floating"> 
                    <option value="">Select Status</option>
                    <option value="">Pending</option>
                    <option value="1">Paid</option>
                    <option value="1">Partially Paid</option>
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
                <table class="table table-striped custom-table m-b-0">
                    <thead>
                        <tr>
                            <th>Session</th>
                            <th>Semester</th>
                            <th>Department</th>
                            <th>Course adviser</th>
                            <th>Submission date</th>
                            <th>Status</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($results as $result)
                        <tr>
                            <td><a href="{{url('deptResult', [$result->users->department_id])}}">{{$result->set->name}}</a></td>
                            <td>
                                @if($result->semester == 1)
                                    1st semester
                                @elseif($result->semester == 1)
                                    2nd semester
                                @endif
                            </td>
                            <td><a href="{{url('deptResult', [$result->users->department_id])}}">{{$result->users->department->name}}</a></td>
                            <td>{{$result->users->name}}</td>
                            <td>{{date('d-m-Y', strtotime($result->created_at))}}</td>
                             @if($result->approved == 1)
                             <td><span class="label label-warning-border"> Semi-Approved </span></td>
                             @elseif($result->approved == 2)
                             <td><span class="label label-success-border">   Fully-Approved </span></td>
                             @elseif($result->approved == 3)
                             <td><span class="label label-danger-border">  rejected by Exam officer </span></td>
                             @elseif($result->approved == 4)
                             <td><span class="label label-danger-border">  rejected by Hod </span></td>
                             @endif
                            
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{url('deptResult', [$result->users->department_id])}}"><i class="fa fa-pencil m-r-5"></i> View</a></li>
                                        <!-- <li><a href="{{url('/results/edit')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a></li> -->
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
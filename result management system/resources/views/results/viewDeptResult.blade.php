@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">{{$department}} Departmental Results</h4>
        </div>
        <div class="col-sm-4 text-right m-b-30 dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Action
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <form action="{{url('approve')}}" method="POST" id="myForm">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" value="{{$id}}" name="user_id" >
                    <li><a href="javascript:$('#myForm').submit()">Approve</a></li>
                </form>
                <li role="separator" class="divider"></li>
                <li><a href="#" data-toggle="modal" data-target="#rejectResult">Reject</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table m-b-0 mydatatable">
                    <thead>
                        <tr>
                            <th>students</th>
                            @foreach($courses as $coursee)
                            <th width="150">{{$coursee->course_code}}</th>
                            @endforeach
                            <th>WA</th>
                            <th class="text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td><a href="{{url('/results/view',[$student->id])}}">{{$student->name}}</a></td>
                            @foreach($student->result as $result)
                            @if(!$result->score)
                            <td></td>
                            @endif
                            <td ><h2>{{$result->score}}
                            @if($result->score >= 70)
                            <span style="font-weight:bold;">A</span>
                            @elseif($result->score >= 60 && $result->score <= 69)
                            <span style="font-weight:bold;">B</span>
                            @elseif($result->score >= 50 && $result->score <= 59)
                            <span style="font-weight:bold;">C</span>
                            @elseif($result->score >= 40 && $result->score <= 49)
                            <span style="font-weight:bold;">D</span>
                            @elseif($result->score >= 30 && $result->score <= 39)
                            <span style="font-weight:bold;">E</span>
                            @elseif($result->score >= 0 && $result->score <= 29)
                            <span style="font-weight:bold;">F</span>
                            @endif 
                            </h2></td>
                            @endforeach
                            <td>
                                {{round($student->result->sum('point')/$std_courses_unit,2)}}
                            </td>
                            
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{url('/results/view',[$student->id])}}"><i class="fa fa-pencil m-r-5"></i> View</a></li>
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

    <div id="rejectResult" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content modal-md">
                <div class="modal-header">
                    <h4 class="modal-title">Reject Result</h4>
                </div>
                <form action="{{url('reject')}}" method="POST" id="rejectForm">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" value="{{$id}}" name="user_id" >
                    <div class="modal-body card-box">
                        <label for="">Reason for rejection <input type="textarea" name="reason" ></label>
                        
                        <div class="m-t-20"> <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                            <button type="submit" class="btn btn-danger">Reject</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
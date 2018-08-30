@extends('layouts.master')
@section('content') 
<div class="row">
    <div class="col-sm-4">
        <h4 class="page-title">Result</h4>
    </div>
    @role('student')
    <div class="col-sm-8 text-right m-b-30">
        <div class="btn-group btn-group-sm">
            <a href="{{ url('pdfview',[$id]) }}" class="btn btn-default">PDF</a>
            <a href="{{ url('printResult',[$id]) }}" class="btn btn-default"><i class="fa fa-print fa-lg"></i> Print</a>
        </div>
    </div>
    @endrole
</div>
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6 m-b-20" style="text-align:center;">
                        <div class="invoice-details">
                            <h3 class="text-uppercase"> semester Result</h3>
                            <ul class="list-unstyled">
                                <li>Date: <span>{{$date}}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3 m-b-20"> 
                        <span class="text-muted">Student Details:</span>
                            <li><b>Name: <span>{{$id->name}}</span></b></li>
                            <li>Email: <span>{{$id->email}}</span></li>
                            <li>Matric no: <span>{{$id->id_no}}</span></li>
                            <li>Department: <span>{{$id->department->name}}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Course code</th>
                                <th>Title</th>
                                <th>score</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($id->result as $key => $result)
                                @if($result->semester == '1')
                                <tr>
                                    <td>{{$result->course->course_code}}</td>
                                    <td class="hidden-xs">{{$result->course->title}}</td>
                                    <td>{{$result->score}}</td>
                                    <td>
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
                                    </td>
                                </tr>
                                @endif

                                @if($result->semester == '2')
                                <tr>
                                    <td>{{$result->course->course_code}}</td>
                                    <td class="hidden-xs">{{$result->course->title}}</td>
                                    <td>{{$result->score}}</td>
                                    <td>
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
                                    </td>
                                </tr>
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="row invoice-payment">
                        <div class="col-sm-7">
                        </div>
                        <div class="col-sm-5">
                            <div class="m-b-20">
                                <h6>Total Score</h6>
                                <div class="table-responsive no-border">
                                    <table class="table m-b-0">
                                        <tbody>
                                            <tr>
                                                <th>Total Points:</th>
                                                <td class="text-right">{{$id->result->sum('point')}}</td>
                                            </tr>
                                            <tr>
                                                <th>WA:</th>
                                                <td class="text-right text-primary"><h5>{{round($id->result->sum('point')/$std_courses_unit,2)}}</h5></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
<div class="row">
        <div class="col-xs-4">
            <h4 class="page-title">Report</h4>
        </div>
        <div class="col-xs-8 text-right m-b-30">
            <a href="{{url('/reports/create')}}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Create Report</a>
        </div>
    </div>
    <div class="row filter-row">
        <div class="col-sm-3 col-xs-6"> 
            <div class="form-group form-focus select-focus">
                <label class="control-label">Report By</label>
                <select class="select floating"> 
                    <option value="">Select buyer</option>
                    <option value="">Daniel Porter</option>
                    <option value="1">Roger Dixon</option>
                </select>
            </div>
        </div>
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
            <a href="#" class="btn btn-success btn-block"> Search </a>  
        </div>     
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-striped custom-table m-b-0 datatable">
                    <thead>
                        <tr>
                            <th>s/n</th>
                            <th>Report By</th>
                            <th>Department</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th class="text-center">Status</th>
                            <th class="text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <strong>1</strong>
                            </td>
                            <td>Mr Ibu</td>
                            <td>Computer science</td>
                            <td>Analysis for 2017</td>
                            <td>Caaasdgfhgjkjl;pogfedwfergtyujuioilkujhgfdsh</td>
                            <td>5 May 2017</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-danger"></i> Pending <i class="caret"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a></li>
                                        <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{url('/reports/show')}}" title="Edit"><i class="fa fa-pencil m-r-5"></i> View</a></li>
                                        <li><a href="#" title="Delete" data-toggle="modal" data-target="#delete_report"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>2</strong>
                            </td>
                            <td>Mr Ibu</td>
                            <td>Computer science</td>
                            <td>Analysis for 2017</td>
                            <td>Caaasdgfhgjkjl;pogfedwfergtyujuioilkujhgfdsh</td>
                            <td>5 May 2017</td>
                            <td class="text-center">
                                <div class="dropdown action-label">
                                    <a class="btn btn-white btn-sm rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-dot-circle-o text-success"></i> Approved <i class="caret"></i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="#"><i class="fa fa-dot-circle-o text-danger"></i> Pending</a></li>
                                        <li><a href="#"><i class="fa fa-dot-circle-o text-success"></i> Approved</a></li>
                                    </ul>
                                </div>
                            </td>
                            <td class="text-right">
                                <div class="dropdown">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="{{url('/reports/show')}}" title="Edit"><i class="fa fa-pencil m-r-5"></i> view</a></li>
                                        <li><a href="#" title="Delete" data-toggle="modal" data-target="#delete_report"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
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
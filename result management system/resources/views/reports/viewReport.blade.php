@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
<div class="row">
    <div class="col-xs-12">
        <h4 class="page-title">View Report</h4>
    </div>
</div>
<div class="row">
    <div class="col-xs-12">
        <div class="card-box">
            <div class="mailview-content">
                <div class="mailview-header">
                    <div class="text-ellipsis m-b-10"><span class="h3">Analysis for 2017</span>
                        <div class="pull-right">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="excel"> <i class="fa fa-file-excel-o"></i></button>
                                <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="pdf"> <i class="fa fa-file-pdf-o"></i></button>
                            </div>
                            <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print"> <i class="fa fa-print"></i></button>
                        </div>
                    </div>
                    <div class="sender-info">
                        <div class="sender-img">
                            <img width="40" alt="" src="assets/img/user.jpg" class="img-circle">
                        </div>
                        <div class="receiver-details pull-left">
                            <span class="sender-name">John Doe </span>
                            <span class="receiver-name">
                                to
                                <span>me</span>, <span>Richard</span>, <span>Paul</span>
                            </span>	
                        </div>	
                        <div class="pull-right">
                            <span class="mail-time">18 Sep. 2017 9:42 AM</span>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="mailview-inner">
                    <p>Hello Richard,</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Thanks,<br>
                    John Doe</p>
                </div>
            </div>
            <div class="mailview-footer">
                <div class="row">
                    <div class="col-sm-6 left-action">
                        <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Approve</button>
                        <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Reject</button>
                    </div>
                    <div class="col-sm-6 right-action">
                        <button type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</button>
                        <button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
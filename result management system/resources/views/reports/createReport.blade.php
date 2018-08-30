@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection
    
@section('content') 
<div class="row">
        <div class="col-xs-12">
            <h4 class="page-title">Create Report</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <div class="card-box">
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="By" class="form-control">
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Title" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <select class="select">
                                <option>Dpartments</option>
                                <option>Engineering</option>
                                <option>Medicine</option>
                            </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Description" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here"></textarea>
                    </div>
                    <div class="form-group m-b-0">
                        <div class="text-center">
                            <button class="btn btn-primary"><span>Send</span> <i class="fa fa-send m-l-5"></i></button>
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
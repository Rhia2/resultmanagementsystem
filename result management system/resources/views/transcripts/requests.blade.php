@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
<div class="row">
    <div class="col-sm-8">
        <h4 class="page-title">Generate Transcript</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <form action="{{url('/generatedTranscript')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Matric Number <span class="text-danger">*</span></label>
                <input class="form-control" required="" type="text" name="mat_no">
            </div>
            <div class="m-t-20 text-center">
                <button class="btn btn-primary">Generate Transcript </button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('modal')
    @include('modal')
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
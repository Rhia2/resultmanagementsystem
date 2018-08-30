@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
<div class="row">
    <div class="col-sm-8">
        <h4 class="page-title">Colleges</h4>
        @include('partials.error')
    </div>
    <div class="col-sm-4 text-right m-b-30">
        <a href="#" class="btn btn-primary rounded" data-toggle="modal" data-target="#add_college"><i class="fa fa-plus"></i> Add New College</a>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div>
            <table class="table table-striped custom-table m-b-0 mydatatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>College Name</th>
                        <th class="text-right">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($colleges as $key => $college)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$college->name }}</td>
                        <td class="text-right">
                            <div class="dropdown">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="#" data-toggle="modal" data-target="#edit_college" title="Edit"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#delete_college" title="Delete"><i class="fa fa-trash-o m-r-5"></i> Delete</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
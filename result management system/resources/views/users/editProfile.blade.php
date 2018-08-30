@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">Edit Profile</h4>
        </div>
    </div>
    <form action="{{url('/update',[$user->id])}}" method="POST">
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="card-box">
            <h3 class="card-title">Basic Informations</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="profile-img-wrap">
                        <img class="inline-block" src="{{url('assets/img/user.jpg')}}" alt="user">
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="control-label">Fullname</label>
                                    <input type="text" class="form-control floating" value="{{$user->name}}" name="name"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus">
                                    <label class="control-label">Birth Date</label>
                                    <div class="cal-icon"><input class="form-control floating datetimepicker" type="text" name="birthday" value="{{$user->birthday}}"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-focus select-focus">
                                    <label class="control-label">Gender</label>
                                    <select class="select form-control floating" name="gender">
                                        <option value="{{$user->gender}}">{{$user->gender}}</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-box">
            <h3 class="card-title">Contact Informations</h3>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group form-focus">
                        <label class="control-label">Email</label>
                        <input type="email" class="form-control floating" name="email" value="{{$user->email}}"/>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group form-focus">
                        <label class="control-label">Address</label>
                        <input type="text" class="form-control floating" name="address" value="{{$user->address}}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="control-label">id</label>
                        <input type="text" class="form-control floating" name="id_no" value="{{$user->id_no}}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group form-focus">
                        <label class="control-label">Phone Number</label>
                        <input type="text" class="form-control floating" name="phone" value="{{$user->phone}}"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center m-t-20">
            <button class="btn btn-primary btn-lg" type="submit">Save &amp; update</button>
        </div>
    </form>
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
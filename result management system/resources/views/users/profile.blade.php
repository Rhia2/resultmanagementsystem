@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 
    <div class="row">
        <div class="col-sm-8">
            <h4 class="page-title">My Profile</h4>
        </div>
        
        <div class="col-sm-4 text-right m-b-30">
            <a href="{{url('/users/editProfile',[$user->id])}}" class="btn btn-primary rounded"><i class="fa fa-plus"></i> Edit Profile</a>
        </div>
    </div>
    <div class="card-box">
        <div class="row">
            <div class="col-md-12">
                <div class="profile-view">
                    <div class="profile-img-wrap">
                        <div class="profile-img">
                            <a href="#"><img class="avatar" src="{{url('assets/img/user.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <div class="profile-basic">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="profile-info-left">
                                    <h3 class="user-name m-t-0 m-b-0">{{$user->name}}</h3>
                                    <small class="text-muted">{{$user->department->name}}</small>
                                    <div class="staff-id">{{$user->id_no}}</div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <ul class="personal-info">
                                    <li>
                                        <span class="title">Email:</span>
                                        <span class="text"><a href="#">{{$user->email}}</a></span>
                                    </li>
                                    <li>
                                        <span class="title">Phone:</span>
                                        @if(empty($user->phone))
                                        <span class="text"><a href="#">no record</a></span>
                                        @endif
                                        <span class="text"><a href="#">{{$user->phone}}</a></span>
                                    </li>
                                    
                                    <li>
                                        <span class="title">Birthday:</span>
                                        @if(empty($user->birthday))
                                        <span class="text"><a href="#">no record</a></span>
                                        @endif
                                        <span class="text">{{$user->birthday}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Address:</span>
                                        @if(empty($user->address))
                                        <span class="text"><a href="#">no record</a></span>
                                        @endif
                                        <span class="text">{{$user->adddress}}</span>
                                    </li>
                                    <li>
                                        <span class="title">Gender:</span>
                                        @if(empty($user->gender))
                                        <span class="text"><a href="#">no record</a></span>
                                        @endif
                                        <span class="text">{{$user->gender}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(Auth::user()->hasRole('student'))
    <div class="row">
        <div class="col-md-4">
            <div class="card-box m-b-0">
                <h3 class="card-title">First semester Courses</h3>
                @if($first_semester_course == 'empty')
                <div class="skills">
                    <span>No course registered</span>
                </div>
                @endif
                <div class="skills">
                @foreach($first_semester_course as $first_semester)
                    <span>{{$first_semester->course_code}} &nbsp;&nbsp;&nbsp;<span>{{$first_semester->title}}</span> </span>
                @endforeach
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card-box m-b-0">
                <h3 class="card-title">Second semester Courses</h3>
                @if($second_semester_course == 'empty')
                <div class="skills">
                    <span>No course registered</span>
                </div>
                @endif
                <div class="skills">
                 @foreach($second_semester_course as $second_semester)
                    <span>{{$second_semester->course_code}} &nbsp;&nbsp;&nbsp;<span>{{$second_semester->title}}</span> </span>
                 @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
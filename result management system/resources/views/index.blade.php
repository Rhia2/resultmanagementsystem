@extends('layouts.master')
@section('style')
    <link rel="stylesheet" type="text/css" href="{{url('assets/plugins/morris/morris.css')}}">
@endsection
@section('content') 
@if(!Auth::user()->hasRole('student'))
    <div class="row">
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-cubes" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>{{$department}}</h3>
                    <span>Departments</span>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>{{$students}}</h3>
                    <span>Students</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-diamond"></i></span>
                <div class="dash-widget-info">
                    <h3>{{$user}}</h3>
                    <span>Users</span>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-lg-3">
            <div class="dash-widget clearfix card-box">
                <span class="dash-widget-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
                <div class="dash-widget-info">
                    <h3>{{$tresult}}</h3>
                    <span>Results</span>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-sm-6 text-center">
                    <div class="card-box">
                        <div id="area-chart" ></div>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="card-box">
                        <div id="line-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-table">
                <div class="panel-heading">
                    <h3 class="panel-title">Result</h3>
                </div>
                <div class="panel-body">
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
                                    @else
                                    <td><span class="label label-danger-border">  Not-Approved </span></td>
                                    @endif
                                    
                                    <td class="text-right">
                                        <div class="dropdown">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <ul class="dropdown-menu pull-right">
                                                <li><a href="{{url('/results/view')}}"><i class="fa fa-pencil m-r-5"></i> View</a></li>
                                                <li><a href="{{url('/results/edit')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a></li>
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
        </div>
    </div>
@endif
    @if(Auth::user()->hasRole('student'))
    <style>

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Welcome {{Auth::user()->name}}
                </div>
            </div>
        </div>
    @endif
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/plugins/morris/morris.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/plugins/raphael/raphael-min.js')}}"></script>
<script>
				var data = [
			  { y: '2014', a: 50, b: 90},
			  { y: '2015', a: 65,  b: 75},
			  { y: '2016', a: 50,  b: 50},
			  { y: '2017', a: 75,  b: 60},
			  { y: '2018', a: 80,  b: 65},
			  { y: '2019', a: 90,  b: 70},
			  { y: '2020', a: 100, b: 75},
			  { y: '2021', a: 115, b: 75},
			  { y: '2022', a: 120, b: 85},
			  { y: '2023', a: 145, b: 85},
			  { y: '2024', a: 160, b: 95}
			],
			config = {
			  data: data,
			  xkey: 'y',
			  ykeys: ['a', 'b'],
			  labels: ['students', 'points'],
			  fillOpacity: 0.6,
			  hideHover: 'auto',
			  behaveLikeLine: true,
			  resize: true,
			  pointFillColors:['#ffffff'],
			  pointStrokeColors: ['black'],
				gridLineColor: '#eef0f2',
			  lineColors:['gray','#667eea']
		  };
		config.element = 'area-chart';
		Morris.Area(config);
		config.element = 'line-chart';
		Morris.Line(config);
		config.element = 'bar-chart';
		Morris.Bar(config);
		config.element = 'stacked';
		config.stacked = true;
		Morris.Bar(config);
		Morris.Donut({
		  element: 'pie-chart',
		  data: [
			{label: "Employees", value: 30},
			{label: "Clients", value: 15},
			{label: "Projects", value: 45},
			{label: "Tasks", value: 10}
		  ]
		});
		</script>
@endsection
@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection

@section('content') 

<div class="row">
    <div class="col-sm-8">
        <h4 class="page-title">Transcript</h4>
    </div>
    <!-- <div class="col-sm-4 text-right m-b-30">
        <div class="btn-group btn-group-sm">
            <button class="btn btn-default">CSV</button>
            <button class="btn btn-default">PDF</button>
            <button class="btn btn-default"><i class="fa fa-print fa-lg"></i> Print</button>
        </div>
    </div> -->
</div>
@if (Session::has('students'))
<div class="row">
    <div class="col-md-12">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-6 m-b-20">
                        <img src="{{url('assets/img/FUNAAB-LOGO.jpg')}}" class="m-b-20" alt="" style="width: 100px;">
                        <ul class="list-unstyled">
                            <li>FUNAAB</li>
                            <li>street,Ondo</li>
                            <li>Nigeria</li>
                        </ul>
                    </div>
                    <div class="col-md-6 m-b-20">
                        <div class="invoice-details">
                            <h3 class="text-uppercase">Traanscript #INV-0001</h3>
                            <ul class="list-unstyled">
                                <li>Date: <span>date()</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-9 m-b-20">
                        <h5>Sent to:</h5>
                        <ul class="list-unstyled">
                            Address of choice
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3 m-b-20">
                        <span class="text-muted">Student Details:</span>
                            <li><h5>Name: <span class="text-right">{{$students->name}}</span></h5></li>
                            <li>Email: <span>{{$students->email}}</span></li>
                            <li>Matric no: <span>{{$students->id_no}}</span></li>
                            <li>Department: <span>{{$students->department->name}}</span></li>
                            <li>Set: <span>{{$students->student_set}}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course code</th>
                                <th class="hidden-xs">course title</th>
                                <th>UNIT</th>
                                <th>score</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Android Application</td>
                                <td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>$1000</td>
                                <td>2</td>
                                <td>$2000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ios Application</td>
                                <td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>$1750</td>
                                <td>1</td>
                                <td>$1750</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Codeigniter Project</td>
                                <td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>$90</td>
                                <td>3</td>
                                <td>$270</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Phonegap Project</td>
                                <td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>$1200</td>
                                <td>2</td>
                                <td>$2400</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Website Optimization</td>
                                <td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>$200</td>
                                <td>2</td>
                                <td>$400</td>
                            </tr>
                        </tbody>
                    </table>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Course code</th>
                                <th class="hidden-xs">course title</th>
                                <th>UNIT</th>
                                <th>score</th>
                                <th>Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Android Application</td>
                                <td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>$1000</td>
                                <td>2</td>
                                <td>$2000</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Ios Application</td>
                                <td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>$1750</td>
                                <td>1</td>
                                <td>$1750</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Codeigniter Project</td>
                                <td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>$90</td>
                                <td>3</td>
                                <td>$270</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Phonegap Project</td>
                                <td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>$1200</td>
                                <td>2</td>
                                <td>$2400</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Website Optimization</td>
                                <td class="hidden-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit</td>
                                <td>$200</td>
                                <td>2</td>
                                <td>$400</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div>
                    <div class="row invoice-payment">
                        <div class="col-sm-7">
                        </div>
                        <div class="col-sm-5">
                            <div class="m-b-20">
                                <h6>Total due</h6>
                                <div class="table-responsive no-border">
                                    <table class="table m-b-0">
                                        <tbody>
                                            <tr>
                                                <th>Subtotal:</th>
                                                <td class="text-right">$7,000</td>
                                            </tr>
                                            <tr>
                                                <th>Tax: <span class="text-regular">(25%)</span></th>
                                                <td class="text-right">$1,750</td>
                                            </tr>
                                            <tr>
                                                <th>Total:</th>
                                                <td class="text-right text-primary"><h5>$8,750</h5></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-info">
                        <h5>Other information</h5>
                        <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed dictum ligula, cursus blandit risus. Maecenas eget metus non tellus dignissim aliquam ut a ex. Maecenas sed vehicula dui, ac suscipit lacus. Sed finibus leo vitae lorem interdum, eu scelerisque tellus fermentum. Curabitur sit amet lacinia lorem. Nullam finibus pellentesque libero, eu finibus sapien interdum vel</p>
                    </div>
                </div>
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
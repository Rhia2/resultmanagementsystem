@extends('layouts.master')
@section('style')
<link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap-datetimepicker.min.css')}}">
@endsection
@section('content')
<div class="row">
    <div class="col-sm-8">
        <h4 class="page-title">Edit Result</h4>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Name <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Please Select</option>
                                <option selected>Barry Cuda</option>
                                <option>Tressa Wexler</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Department <span class="text-danger">*</span></label>
                            <select class="select">
                                <option>Select Project</option>
                                <option selected>Food and Drinks</option>
                                <option>School Guru</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Semester</label>
                            <select class="select">
                                <option>Select Tax</option>
                                <option>VAT</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Client Address</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Billing Address</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Estimate Date <span class="text-danger">*</span></label>
                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Expiry Date <span class="text-danger">*</span></label>
                            <div class="cal-icon"><input class="form-control datetimepicker" type="text"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-white">
                                <thead>
                                    <tr>
                                        <th style="width: 20px">#</th>
                                        <th class="col-sm-2">Item</th>
                                        <th class="col-md-6">Description</th>
                                        <th style="width:100px;">Unit Cost</th>
                                        <th style="width:80px;">Qty</th>
                                        <th>Amount</th>
                                        <th> </th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>
                                        <input class="form-control" type="text" style="min-width:150px">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" style="min-width:150px">
                                    </td>
                                    <td>
                                        <input class="form-control" style="width:100px" type="text">
                                    </td>
                                    <td>
                                        <input class="form-control" style="width:80px" type="text">
                                    </td>
                                    <td>
                                        <input class="form-control" readonly="" style="width:120px" type="text">
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-success font-18" title="Add"><i class="fa fa-plus"></i></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>
                                        <input class="form-control" type="text" style="min-width:150px">
                                    </td>
                                    <td>
                                        <input class="form-control" type="text" style="min-width:150px">
                                    </td>
                                    <td>
                                        <input class="form-control" style="width:100px" type="text">
                                    </td>
                                    <td>
                                        <input class="form-control" style="width:80px" type="text">
                                    </td>
                                    <td>
                                        <input class="form-control" readonly="" style="width:120px" type="text">
                                    </td>
                                    <td><a href="javascript:void(0)" class="text-danger font-18" title="Remove"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover table-white">
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-right">Total</td>
                                        <td style="text-align: right; padding-right: 30px;width: 230px">0</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-right">Tax</td>
                                        <td style="text-align: right; padding-right: 30px;width: 230px">
                                            <input class="form-control text-right" value="0" readonly="" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" class="text-right">
                                            Discount %
                                        </td>
                                        <td style="text-align: right; padding-right: 30px;width: 230px">
                                            <input class="form-control text-right" type="text">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="5" style="text-align: right; font-weight: bold">
                                            Grand Total
                                        </td>
                                        <td style="text-align: right; padding-right: 30px; font-weight: bold; font-size: 16px;width: 230px">
                                            $ 0.00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                               
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Other Information</label>
                                    <textarea class="form-control" rows="4"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary">Save Changes</button> <button class="btn btn-primary">Save & Send</button>
            </form>
        </div>
@endsection
@section('script')
<script type="text/javascript" src="{{url('assets/js/moment.min.js')}}"></script>
<script type="text/javascript" src="{{url('assets/js/bootstrap-datetimepicker.min.js')}}"></script>
@endsection
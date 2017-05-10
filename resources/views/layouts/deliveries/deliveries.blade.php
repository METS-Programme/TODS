<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TODS | IP Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="deliveries">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newdelivery">
                    Enter new delivery
                </button>
            </div>
        </div>
    </div>

    <!-- div for place new order pop up dialog-->
    {{--<div class='container'>--}}
    {{--<html class="col-lg-12-column">--}}
    {{--<p style="color: red"><strong>To add new deliveries go to > <a href="{{url('printorderCRUD')}}">Print Orders</a></strong></p>--}}
    <div class="modal fade" id="newdelivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" style="text-align: center;">Place new Delivery</h4>
                </div>

                <div class="modal-body">
                    {{ Form::open(array('route'=>'deliveryCRUD.store','method'=>'POST')) }}
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">LPO number / Order No:</label>
                                {!! Form::select('lpo_number', $printorders , null, array('placeholder' => 'Select LPO Number','class' => 'form-control')) !!}
                                {!! Form::hidden('printingorder_id', 1, array('placeholder' => 'Select LPO Number','class' => 'form-control')) !!}
                            </div>
                            <div class="col-md-3">
                                <label for="">Date-delivered</label>
                                {!! Form::date('date_delivered', null, array('placeholder' => 'Date ordered','class' => 'form-control')) !!}
                            </div>
                            {{--<div class="col-md-2">--}}
                                {{--<label for="">Tool Duration</label>--}}
                                {{--{{Form::text('tools_duration', null, array('placeholder' => 'Quarter','class' => 'form-control'))}}--}}
                            {{--</div>--}}
                            <div class="col-md-3">
                                <label for="">Delivered By</label>
                                {!! Form::text('delivered_by', null, array('placeholder' => 'Inline','class' => 'form-control')) !!}
                            </div>
                            <div class="col-md-3">
                                <label for="">Received By To</label>
                                {!! Form::text('received_by', null, array('placeholder' => 'METS','class' => 'form-control')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr class="row">
                                <th class="">#No</th>
                                <th class="">HMIS Tool Name</th>
                                <th class="">QTY Delivered</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php($i = 1)
                            @foreach($toolname as $key=>$tool)
                            <tr class="row">
                                <td class="">{{$i}}</td>
                                {{--<td>{{Form::select('tools_id', $toolname, null)}}</td>--}}
                                <td class="">
                                    <select name="tools_id[]" class="form-control" readonly= "true">
                                        <option value="{{$key}}">{{$tool}}</option>
                                    </select>
                                </td>
                                <td class="">
                                    {{Form::number('quantity_delivered[]', null, array('placeholder' => '0','class' => 'form-control')) }}
                                </td>
                            </tr>
                            @php($i++)
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <label for="login-password">General Comments</label>
                        {!! Form::textarea('comment', null, array('placeholder' => 'Comments','class' => 'form-control','rows' => '5')) !!}
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                {{ Form::submit('Submit', array('class' => 'btn btn-info btn-block')) }}
                                {{ Form::close() }}
                            </div><div class="col-md-4"></div>
                        </div>
                    </div>


                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div>
    </div>
    <!--place new order ends -->
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Deliveries</h3>
        </div>

        <div class="box-body no-padding">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>LPO Number</th>
                    <th>Delivered by</th>
                    <th>Date delivered</th>
                    <th>Received by</th>
                    <th>Comment</th>
                    <th width="280px">Action</th>
                </tr>
                </thead>
                <tbody>
                @php($i = 1)
                @foreach ($ordernumber as $delivery)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$delivery->lpo_number}} </td>
                        <td>{{$delivery->delivered_by}}</td>
                        <td>{{$delivery->date_delivered}}</td>
                        <td>{{$delivery->received_by}}</td>
                        <td>{{$delivery->comment}}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('deliveryCRUD.show',$delivery->delivery_id) }}">View Delivery Details</a>
                            {{--<a class="btn btn-primary" href="{{ route('deliveryCRUD.edit',$delivery->delivery_id) }}">Edit</a>--}}
                            {{--{!! Form::open(['method' => 'DELETE','route' => ['deliveryCRUD.destroy', $delivery->delivery_id],'style'=>'display:inline']) !!}--}}
                            {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @php($i++)
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</html>


<!-- jQuery 2.2.3 -->
<script src="/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/bower_components/AdminLTE/dist/js/demo.js"></script>

{{--<script>--}}
{{--$(document).ready(function() {--}}
{{--var max_fields      = 10; //maximum input boxes allowed--}}
{{--var wrapper         = $(".input_fields_wrap"); //Fields wrapper--}}
{{--var add_button      = $(".add_field_button"); //Add button ID--}}

{{--var x = 1; //initlal text box count--}}
{{--$(add_button).click(function(e){ //on add input button click--}}
{{--e.preventDefault();--}}
{{--if(x < max_fields){ //max input box allowed--}}
{{--x++; //text box increment--}}
{{--$("#rm").remove();--}}
{{--//                        $(wrapper).append('<tr id="divs">');--}}
{{--$(wrapper).append('<tr><td id="divs">{{Form::select("mytext[]", $toolname, null)}}</td>'); //add input box--}}
{{--$(wrapper).append('<td id="divs">{{Form::text("mytext[]", null, array("placeholder" => "Tool duration","class" => "form-control"))}}</td>'); //add input box--}}
{{--$(wrapper).append('<td id="divs">{{Form::number("mytext[]", null, array("placeholder" => "Quantity","class" => "form-control")) }}</td>'); //add input box--}}
{{--$(wrapper).append('<td id="divs"><a href="#" id="rm" class="remove_field btn btn-xs btn-danger btn-remove">Remove</a></td></tr>'); //add input box--}}
{{--//                        $(wrapper).append('</tr>');--}}
{{--}--}}
{{--});--}}

{{--$(wrapper).on("click",".remove_field", function(e){ //user click on remove text--}}
{{--e.preventDefault(); $("#divs").remove(); x--;--}}
{{--$("#divs").remove(); x--;--}}
{{--$("#divs").remove(); x--;--}}
{{--$("#divs").remove(); x--;--}}

{{--})--}}
{{--});--}}
{{--</script>--}}
@endsection
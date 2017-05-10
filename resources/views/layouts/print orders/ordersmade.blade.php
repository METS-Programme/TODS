@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            {{--<div class="orders-table">--}}
                {{--<h2>Orders placed</h2>--}}
            {{--</div>--}}
            <div class="oders">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                    Place New Order
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
                {{--<a href="#" class="btn btn-primary btn-sm">Place New Order</a>--}}
            </div>
        </div>
    </div>

    <!-- div for place new order pop up dialog-->
    {{--<div class='container'>--}}
    <div class="col-lg-12-column">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" style="text-align: center;">Place new order</h4>
            </div>

            <div class="modal-body">
                {{ Form::open(array('route'=>'printorderCRUD.store','method'=>'POST')) }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">LPO number</label>
                            {!! Form::text('lpo_number', null, array('placeholder' => 'LPO number','class' => 'form-control')) !!}
                        </div>
                        <div class="col-md-3">
                            <label for="">Date-ordered</label>
                            {!! Form::date('date_ordered', null, array('placeholder' => 'Date ordered','class' => 'form-control')) !!}
                        </div>
                        <div class="col-md-2">
                            <label for="">Tool Duration</label>
                            {{Form::text('tools_duration', null, array('placeholder' => 'Quarter','class' => 'form-control'))}}
                        </div>
                        <div class="col-md-2">
                            <label for="">Ordered By</label>
                            {!! Form::text('ordered_by', null, array('placeholder' => 'METS','class' => 'form-control')) !!}
                        </div>
                        <div class="col-md-2">
                            <label for="">Ordered To</label>
                            {!! Form::text('ordered_to', null, array('placeholder' => 'In-Line','class' => 'form-control')) !!}
                        </div>
                    </div>
                </div>
                <div class="box-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="row">
                            <th class="col-md-1">#No</th>
                            <th class="col-md-7">HMIS Tool</th>
                            <th class="col-md-4">Quantity</th>
                            {{--<th>Operations</th>--}}
                        </tr>
                    </thead>
                    <tbody>
                    @php($i = 1)
                    @foreach($toolname as $key=>$tool)
                        <tr class="row">
                            <td class="col-md-1">{{$i}}</td>
                            {{--<td>{{Form::select('tools_id', $toolname, null)}}</td>--}}
                            <td class="col-md-7">
                                {{--{{Form::text('tools_id', $tool, array('placeholder' => $tool,'class' => 'form-control', 'readonly' => 'true'))}}--}}
                                <select name="tools_id[]" class="form-control" readonly= "true">
                                    <option value="{{$key}}">{{$tool}}</option>
                                </select>
                            </td>
                            <td class="col-md-4">{{Form::number('quantity_ordered[]', null, array('placeholder' => '0','class' => 'form-control')) }}</td>
                            {{--<td>--}}
                                {{--<span><button class="add_field_button btn btn-sm btn-info btn-add-another-tool ">Add another tool</button></span>--}}
                                {{--<span><a href="#" class="btn btn-xs btn-danger btn-remove">Remove</a></span>--}}
                            {{--</td>--}}
                        </tr>
                    @php($i++)
                    @endforeach
                    </tbody>
                    {{--<tbody class="input_fields_wrap">--}}
                        {{--<tr class="">--}}
                            {{--<td></td>--}}
                            {{--<td>{{Form::select('tools_id', $toolname, null)}}</td>--}}
                            {{--<td>{{Form::text('tools_duration', null, array('placeholder' => 'Tool duration','class' => 'form-control'))}}</td>--}}
                            {{--<td>{{Form::number('quantity_ordered', null, array('placeholder' => 'Quantity','class' => 'form-control')) }}</td>--}}
                            {{--<td>--}}
                                {{--<span><button class="add_field_button btn btn-sm btn-info btn-add-another-tool ">Add another tool</button></span>--}}
                                {{--<span><a href="#" class="btn btn-xs btn-danger btn-remove">Remove</a></span>--}}
                            {{--</td>--}}
                        {{--</tr>--}}

                    {{--</tbody>--}}
                </table>
                </div>
                <div class="form-group">
                    <label for="login-password">General Comments</label>
                    {!! Form::textarea('comment', null, array('placeholder' => 'Comments','class' => 'form-control','rows' => '5')) !!}
                </div>


                {{--<div class="input_fields_wrap">--}}
                    {{--<button class="add_field_button">Add More Fields</button>--}}
                    {{--<div><input type="text" name="mytext[]"></div>--}}
                {{--</div>--}}
                {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>--}}



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
    {{--@if ($message = Session::get('success'))--}}
        {{--<div class="alert alert-success">--}}
            {{--<p>{{ $message }}</p>--}}
        {{--</div>--}}
    {{--@endif--}}
    {{--</div>--}}
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>LPO number</th>
            <th>Date_ordered</th>
            <th>Tools duration</th>
            <th>Ordered By</th>
            <th>Comment</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @php($i=1)
        @foreach ($printorders as $printorder)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $printorder->lpo_number}}</td>
                <td>{{ $printorder->date_ordered}}</td>
                <td>{{ $printorder->tools_duration}}</td>
                <td>{{ $printorder->ordered_by}}</td>
                <td>{{ $printorder->comment}}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('printorderCRUD.show',$printorder->printorder_id)}}">View Order Details <span class="fa fa-list-alt"></span></a>
                    {{--<a class="btn btn-primary btn-success" href="{{route('printorderCRUD.show',$printorder->printorder_id)}}">Add New Delivery <span class="fa fa-truck"></span></a>--}}
                    <!-- edit print order -->
                    {{--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-edit"> Edit </button>--}}
                    {{--<div class="modal fade" id="myModal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
                        {{--<div class="modal-dialog modal-sm">--}}
                            {{--<div class="modal-content">--}}
                                {{--<div class="modal-header">--}}
                                    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>--}}
                                    {{--<h4 class="modal-title" style="text-align: center;">Edit Order</h4>--}}
                                {{--</div>--}}

                                {{--<div class="modal-body">--}}
                                    {{--{!! Form::model($printorder, ['method' => 'PATCH','route' => ['printorderCRUD.update', $printorder->printorder_id]]) !!}--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="login-email">LPO number</label>--}}
                                        {{--{!! Form::text('lpo_number', null, array('placeholder' => 'LPO number','class' => 'form-control')) !!}--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group">--}}
                                        {{--<label for="login-password">Date-ordered</label>--}}
                                        {{--{!! Form::date('date_ordered', null, array('placeholder' => 'Date ordered','class' => 'form-control')) !!}--}}
                                    {{--</div>--}}
                                    {{--<table>--}}
                                        {{--<tr>--}}
                                            {{--<td>--}}
                                    {{--<div class="form-group ">--}}
                                        {{--<label for="login-password">Tool name and code</label>--}}
                                        {{--{!! Form::text('tool_name_and_code', null, array('placeholder' => 'Tool name and code','class' => 'form-control')) !!} --}}
                                        {{--{{Form::select('tools_id', $toolname, null)}}--}}
                                    {{--</div>--}}
                                            {{--</td>--}}
                                            {{--<td>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<label for="login-password">Quantity Ordered</label>--}}
                                        {{--{!! Form::text('quantity_ordered', null, array('placeholder' => 'Quantity','class' => 'form-control')) !!}--}}
                                    {{--</div>--}}
                                            {{--</td>--}}

                                        {{--</tr>--}}
                                    {{--</table>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<label for="login-password">Tools duration</label>--}}
                                        {{--{!! Form::text('tools_duration', null, array('placeholder' => 'Tool duration','class' => 'form-control')) !!}--}}
                                    {{--</div>--}}

                                    {{--<div class="form-group">--}}
                                        {{--<label for="login-password">Comments</label>--}}
                                        {{--{!! Form::textarea('comment', null, array('placeholder' => 'Comments','class' => 'form-control')) !!}--}}
                                    {{--</div>--}}

                                    {{--{{ Form::submit('Edit order', array('class' => 'btn btn-info btn-block')) }}--}}

                                    {{--<hr>--}}
                                    {{--{{ Form::close() }}--}}
                                {{--</div>--}}
                            {{--</div><!-- /.modal-content -->--}}
                        {{--</div><!-- /.modal-dialog -->--}}
                    {{--</div>--}}



                    <!--delete order -->
                    {{--{!! Form::open(['method' => 'DELETE','route' => ['printorderCRUD.destroy', $printorder->printorder_id],'style'=>'display:inline']) !!}--}}
                    {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                    {{--{!! Form::close() !!}--}}
                </td>
            </tr>
            @php($i++)
        @endforeach
        </tbody>
    </table>
    {{--{!! $printorders->render() !!}--}}

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
        {{--var template ='<div class="form-group tool-select-container">'+--}}
            {{--'<label for="login-password">Tool name and code</label>'+--}}
        {{--'{{Form::select('tools_id', $toolname, null)}}'+--}}
        {{--'<a href="#" class="btn btn-xs btn-danger btn-remove">Remove</a>'+--}}
            {{--'</div>'--}}
    {{--$('.btn-add-another-tool').on('Click', function(e){--}}
        {{--e.preventDefault();--}}
        {{--$(this).before(template);--}}

    {{--})--}}
    {{--</script>--}}
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
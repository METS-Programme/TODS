@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Orders placed</h2>
            </div>
            <div class="pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                    Place New Order
                </button>
            </div>
        </div>
    </div>

    <!-- div for place new order pop up dialog-->
    <div class='container'>
    <div class="col-md-12-column">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" style="text-align: center;">Place new order</h4>
            </div>

            <div class="modal-body">
                {{ Form::open(array('route'=>'printorderCRUD.store','method'=>'POST')) }}
                <div class="form-group">
                    <label for="login-email">LPO number</label>
                    {!! Form::text('lpo_number', null, array('placeholder' => 'LPO number','class' => 'form-control')) !!}
                </div>
                <div class="form-group">
                    <label for="login-password">Date-ordered</label>
                    {!! Form::date('date_ordered', null, array('placeholder' => 'Date ordered','class' => 'form-control')) !!}
                </div>

                <div class="form-group">
                    <label for="login-password">Tools duration</label>
                    {!! Form::text('tools_duration', null, array('placeholder' => 'Tool duration','class' => 'form-control')) !!}
                </div>

                    <table>
                        <tr>
                            <div id="additionaltools">
                            <td>
                                <div class="form-group tool-select-container">
                                    <label for="login-password">Tool name and code</label>
                                    {{--  {!! Form::text('tool_name_and_code', null, array('placeholder' => 'Tool name and code','class' => 'form-control')) !!} --}}
                                    {{--  {!! Form::select('tool_name_and_code', $toolname, null, array('placeholder'=>'tool name and code', 'class'=>'form-control') ) !!} --}}
                                    {{Form::select('tools_id', $toolname, null)}}
                                    <a href="#" class="btn btn-xs btn-danger btn-remove">Remove</a>
                                </div>

                                <a href="#" class="btn btn-sm btn-info btn-add-another-tool"> Add another tool </a>
                            </td>
                            <td>
                                <div class="form-group">
                                    <label for="login-password">Quantity Ordered</label>
                                    {!! Form::number('quantity_ordered', null, array('placeholder' => 'Quantity','class' => 'form-control')) !!}
                                </div>
                            </td>
            </div>
                        </tr>
                    </table>
                <div class="form-group">
                    <label for="login-password">Comments</label>
                    {!! Form::textarea('comment', null, array('placeholder' => 'Comments','class' => 'form-control')) !!}
                </div>

                {{ Form::submit('Submit', array('class' => 'btn btn-info btn-block')) }}
                {{ Form::close() }}
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
    </div>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>LPO number</th>
            <th>Date_ordered</th>
            <th>Tools duration</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($printorders as $printorder)
            <tr>
                <td>{{ $printorder->printorder_id }}</td>
                <td>{{ $printorder->lpo_number}}</td>
                <td>{{ $printorder->date_ordered}}</td>
                <td>{{ $printorder->tools_duration}}</td>
                <td>
                    <!--show order details button-->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-show"> Show </button>
                        <div class="modal" id="modal-show">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                        <h3 class="modal-title">Order details</h3>
                                    </div> <!--close modal header-->
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>LPO number:</strong>
                                                    {{ $printorder->lpo_number}}
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Date ordered:</strong>
                                                    {{ $printorder->date_ordered}}
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Tools duration:</strong>
                                                    {{ $printorder->tools_duration}}
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Tools code and name:</strong>
                                                    {{ $printorder->toolname}}
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Quantity ordered:</strong>
                                                    {{ $printorder->quantity_ordered}}
                                                </div>
                                            </div>

                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <strong>Comments:</strong>
                                                    {{ $printorder->comment}}
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--close modal body-->
                                </div><!--close modal content-->
                            </div><!--close modal dialog-->
                        </div><!--close modal-->
                    <!--close container-->
                    <!-- show order details ends -->

                    <!-- edit print order -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-edit"> Edit </button>
                    <div class="modal fade" id="myModal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" style="text-align: center;">Edit Order</h4>
                                </div>

                                <div class="modal-body">
                                    {!! Form::model($printorder, ['method' => 'PATCH','route' => ['printorderCRUD.update', $printorder->printorder_id]]) !!}
                                    <div class="form-group">
                                        <label for="login-email">LPO number</label>
                                        {!! Form::text('lpo_number', null, array('placeholder' => 'LPO number','class' => 'form-control')) !!}
                                    </div>
                                    <div class="form-group">
                                        <label for="login-password">Date-ordered</label>
                                        {!! Form::date('date_ordered', null, array('placeholder' => 'Date ordered','class' => 'form-control')) !!}
                                    </div>
                                    <table>
                                        <tr>
                                            <td>
                                    <div class="form-group ">
                                        <label for="login-password">Tool name and code</label>
                                        {{--{!! Form::text('tool_name_and_code', null, array('placeholder' => 'Tool name and code','class' => 'form-control')) !!} --}}
                                        {{Form::select('tools_id', $toolname, null)}}
                                    </div>
                                            </td>
                                            <td>

                                    <div class="form-group">
                                        <label for="login-password">Quantity Ordered</label>
                                        {!! Form::text('quantity_ordered', null, array('placeholder' => 'Quantity','class' => 'form-control')) !!}
                                    </div>
                                            </td>

                                        </tr>
                                    </table>

                                    <div class="form-group">
                                        <label for="login-password">Tools duration</label>
                                        {!! Form::text('tools_duration', null, array('placeholder' => 'Tool duration','class' => 'form-control')) !!}
                                    </div>

                                    <div class="form-group">
                                        <label for="login-password">Comments</label>
                                        {!! Form::textarea('comment', null, array('placeholder' => 'Comments','class' => 'form-control')) !!}
                                    </div>

                                    {{ Form::submit('Edit order', array('class' => 'btn btn-info btn-block')) }}

                                    <hr>
                                    {{ Form::close() }}
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div>



                    <!--delete order -->
                    {!! Form::open(['method' => 'DELETE','route' => ['printorderCRUD.destroy', $printorder->printorder_id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
    </table>
    {!! $printorders->render() !!}

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
    <script>
        var template ='<div class="form-group tool-select-container">'+
            '<label for="login-password">Tool name and code</label>'+
        '{{Form::select('tools_id', $toolname, null)}}'+
        '<a href="#" class="btn btn-xs btn-danger btn-remove">Remove</a>'+
            '</div>'
    $('.btn-add-another-tool').on('Click', function(e){
        e.preventDefault();
        $(this).before(template);

    })

    </script>

@endsection
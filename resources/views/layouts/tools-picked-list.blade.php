@extends('layouts.master')

@section('title')
    <h4>Tools Picked</h4>
@endsection

@section('content')
    <body>
    <div class="users-table">
        @include('errors.list')

        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-backdrop="static"
                data-target="#myModal">
            New Tool Pickup
            <span class="glyphicon glyphicon-plus"></span>
        </button>
        {{--<div class="add-button" style="margin-bottom: 10px">
            <a href="url('/ips/create')" class="btn btn-primary" data-target="#myModal">
             <span class="glyphicon glyphicon-user"></span> Add IP
            </a>
        </div>--}}
    <!-- Modal To create New Ip form-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                    class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Tool Pickup</h4>
                    </div>
                    <div class="modal-body">
                        <div class="register-box-body" id="myModal">
                            <h3 align="center"> HMIS Tool Pickup Form</h3>
                            @include('errors.list')
                            {!! Form::open() !!}
                            @include('includes.toolPickupForm', ['submitButtonText' => 'Submit', 'clearButton'=> 'Clear'])
                            {!! Form::close() !!}

                            {{--@include('errors.list')--}}
                            {{--<form action="{{url('tools-picked')}}" method="post">--}}
                            {{-- @include('includes.toolPickupForm', ['submitButtonText' => 'Create Ip', 'clearButton'=> 'Clear'])--}}
                            {{--</form>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--List Registered Implementing partners--}}
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tools Picked</h3>

                <div class="box-tools">
                    <ul class="pagination pagination-sm no-margin pull-right">
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th style="width: 10px">#</th>
                        <th>Qty Ordered</th>
                        <th>Qty Authorized</th>
                        <th>Qty Collected</th>
                        <th>Balance Due</th>
                        <th>Comments</th>
                        <th>Date</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i = 1)
                    @foreach($toolsPicked as $picked)
                        <tr>
                            <td>{{$i}}</td>
                            <td><a href="#">{{$picked->quantity_ordered}}</a></td>
                            <td>{{$picked->quantity_authorized}}</td>
                            <td>{{$picked->quantity_collected}}</td>
                            <td style="color:red">
                                @if( ($bal = ($picked->quantity_authorized) - ($picked->quantity_collected)) > 0)
                                    {{ $bal }} @else {{0}}
                                @endif</td>
                            <td>{{substr($picked->comments, 0,50)}}</td>
                            <td>{{date_format($picked->created_at, 'j/M/Y')}}</td>
                            <td colspan="2">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-backdrop="static" data-target="#myModal">
                                    Edit
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                                <a href="#" class="btn btn-adn btn-sm">Delete
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </td>
                        </tr>
                      @php($i++)
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
    <!-- jQuery 2.2.3 -->
    <script src="/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>
    <script src="/bower_components/AdminLTE/plugins/datatables/jquery.dataTables.min.js"></script>

    <script src="/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js"></script>
    </body>
@endsection
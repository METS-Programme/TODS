@extends('layouts.master')

@section('title')
    <h4>Tools Allocation</h4>
@endsection

@section('content')
    <body>
    <div class="users-table">
        @include('errors.list')
    <div class="row">
        <div class="col-md-7">
            <button type="button" class=" btn btn-primary btn-sm" data-toggle="modal" data-backdrop="static" data-target="#myModal">
                  Import Allocations
                <span class="glyphicon glyphicon-open"></span>
            </button>
        </div>
        <div class="col-md-5">
            <a class="col-md-4" href="{{ url('allocations/xls') }}"><button class="btn btn-success btn-sm">Download XLS <span class="glyphicon glyphicon-save"></span></button></a>
            <a class="col-md-4" href="{{ url('allocations/xlsx') }}"><button class="btn btn-success btn-sm">Download XLSX <span class="glyphicon glyphicon-save"></span></button></a>
            <a class="col-md-4" href="{{ url('allocations/csv') }}"><button class="btn btn-success btn-sm">Download CSV <span class="glyphicon glyphicon-save"></span></button></a>
        </div>
    </div>
    <!-- Modal To create New Ip form-->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                    class="sr-only">Close</span></button>
                        <h4 class="modal-title" id="myModalLabel">Allocations</h4>
                    </div>
                    <div class="modal-body">
                        <div class="register-box-body" id="myModal">
                            <div class="panel-heading">
                                <h3 class="panel-title" style="padding:10px 0px;font-size:25px;"><strong>Import export csv or excel file into database</strong></h3>
                            </div>
                            <div class="panel-body">
                                @include('errors.list')
                                <h3>Import File Form:</h3>
                                <form style="border: 4px solid #a1a1a1; padding: 10px;" action="{{ URL::to('allocations') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="file" name="import_file" />
                                    <br/>
                                    <button class="btn btn-primary">Import Excel or CSV File <span class="glyphicon glyphicon-import"></span></button>
                                </form>
                                <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{--List Registered Implementing partners--}}
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Tools Allocations</h3>

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
                        <th>Facility Level</th>
                        <th>Tool</th>
                        <th>Qty Allocated</th>
                        <th>Date Allocated</th>
                        <th>Status</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i = 1)

                    @foreach($toolsAllocation as $Allocation)
                            <td>{{$i}}</td>
                           {{-- <td>
                                @foreach($ips as $ip)
                                    @if ($Allocation->ip_id == $ip->ip_id)
                                       {{$ip->name}}
                                    @endif
                                @endforeach
                            </td>--}}
                            @if($Allocation->health_facility_level_id == 2)<td>{{'HCII'}}</td>
                            @elseif($Allocation->health_facility_level_id == 3)<td>{{'HCIII'}}</td>
                            @elseif($Allocation->health_facility_level_id == 4)<td>{{'HCIV'}}</td>
                            @elseif($Allocation->health_facility_level_id == 5)<td>{{'HOSPITAL'}}</td>
                            @endif
                            <td>{{$Allocation->tool_id}}</td>
                            <td>{{$Allocation->quantity}}</td>
                            <td>{{$Allocation->date_allocated}}</td>
                            @if($Allocation->status==0)<td>{{'New'}}</td>
                            @else<td>{{'Re-Allocation'}}</td>
                            @endif
                            {{--<td>{{date_format($Allocation->created_at_in_db, 'j/M/Y')}}</td>--}}
                            <td colspan="2">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle=""
                                        data-backdrop="static" data-target="#">
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
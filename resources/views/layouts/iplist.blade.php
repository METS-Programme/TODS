@extends('layouts.master')

@section('title')
    <h4>Registered IPS</h4>
@endsection

@section('content')
    <body>
    <div class="users-table">
        @include('errors.list')
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-backdrop="static"
                data-target="#myModal">
            Add New IP
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
                        <h4 class="modal-title" id="myModalLabel">Register a new IP</h4>
                    </div>
                    <div class="modal-body">
                        <div class="register-box-body" id="myModal">
                            @include('errors.list')
                            <form role="form" action="{{url('ips')}}" method="post" enctype="multipart/form-data">
                                @include('includes.ipForm', ['submitButtonText' => 'Create Ip', 'clearButton'=> 'Clear'])
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--List Registered Implementing partners--}}
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Registered IPs</h3>

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
                        <th>Names</th>
                        <th>Comprehensive Partner</th>
                        <th>Funding Agency</th>
                        <th>Date Joined</th>
                        <th>Operations</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php($i = 1)
                    @foreach($ips as $ip)
                        <tr>
                            <td>{{$i}}</td>
                            <td>
                                <a class="user-block" href="{{route('ips.show',$ip['ip_id'])}}">
                                    <img class="img-circle img-bordered-sm" src="{{'/images/'.$ip['image'] }}" alt="">
                                    <span class="username">{{$ip['name']}}</span>
                            </a>
                            </td>
                        <td>{{$ip['comprehensive_partner']}}</td>
                            <td>
                                {{$ip['funding_agency']['short_name']}}
                            </td>
                            <td>{{$ip['created_at']}}</td>
                            <td colspan="2">
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-backdrop="static" data-target="#myModal">
                                    Edit
                                    <span class="glyphicon glyphicon-pencil"></span>
                                </button>
                                <a href="#" class="btn btn-adn btn-sm">Delete
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                                {{--{{ route('deliveryCRUD.show',$delivery->delivery_id) }}--}}
                                <a href="{{route('ips.show',$ip['ip_id'])}}" class="btn btn-default btn-sm">View Details
                                    <span class="glyphicon glyphicon-eye-open"></span>
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
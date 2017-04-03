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
            New tool Pickup
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
                        <h4 class="modal-title" id="myModalLabel">New Pickup</h4>
                    </div>
                    <div class="modal-body">
                        <div class="register-box-body" id="myModal">
                            {{--@include('errors.list')--}}
                            {{--<form action="{{url('ips')}}" method="post">--}}
                            {{--@include('includes.ipForm', ['submitButtonText' => 'Create Ip', 'clearButton'=> 'Clear'])--}}
                            {{--</form>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>


        {{--List Registered Implementing partners--}}
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Available Tools to be pick by IPs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table id="example1" class="table table-bordered table-striped">
            @include('layouts.tools_available.availableTools')
            </table>
        </div>
        </div>
        <!-- /.box -->

    </div>
    <!-- /.col -->

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
    <!-- page script -->
    <script>
        $(function () {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });
    </script>
    </body>
@endsection
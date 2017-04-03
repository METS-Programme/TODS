@extends('layouts.master')

@section('title')
    Tool Registration
@endsection

@section ('content')
    <body class="hold-transition register-page">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="register-box">

        <div class="register-box-body">
            <p class="login-box-msg">Register a new tool</p>

            <form action="store" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Tool Code" id="code">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Tool name" id="name">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Specification" id="specification">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Service" id="service_area">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Package" id="package_id">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Description" id="description">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">




                    <!-- /.col -->
                        <p align="center"> <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                            <button type="reset" class="btn btn-primary">Clear</button> </p>
                    <!-- /.col -->

            </form>

        </div>
        <!-- /.form-box -->
    </div>

    <!-- /.register-box -->

    <!-- jQuery 2.2.3 -->
    <script src="/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="/bower_components/AdminLTE/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
    @endsection
    </body>
    </html>

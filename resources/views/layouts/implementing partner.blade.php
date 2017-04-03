@extends('layouts.master')

@section('title')
    Registration Implementing Partner
@endsection

@section ('content')
<body class="hold-transition register-page">
@if($errors->any())
    <ul class="alert alert-error">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
<div class="register-box" >

    <div class="register-box-body" id="myModal">
        <p class="login-box-msg">Register a new IP</p>

        <div action="{{url('ips')}}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group has-feedback">
                <input type="text" name="name" class="form-control" placeholder="IP Name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <!-- radio -->
            {{--<div class="form-group">
                <label>
                    <input type="radio" name="comprehensive_partner"  id="no" value="No" class="flat-red" checked>
                    IP Not Comprehensive Partner
                </label>
                <label>
                    <input type="radio" name="comprehensive_partner" id="yes" value="Yes" class="flat-red">
                    IP is a Comprehensive Partner
                </label>

            </div>--}}
        <!-- select -->
            <div class="form-group">
                <label>Is IP a Comprehensive Partner</label>
                <select class="form-control" name="comprehensive_partner">
                    <option value="No">NO</option>
                    <option value="Yes">YES</option>
                </select>
            </div>

            <!-- select -->
            <div class="form-group">
                <label>Funding Agency</label>
                <select class="form-control" name="fundingagency_id">
                    <option value="1">CDC</option>
                    <option value="2">USAID</option>
                </select>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label>Regions</label>
                    <input placeholder="Total" class="form-control" name="regions" type="number">
                </div>
                <div class="col-md-4">
                    <label>Districts</label>
                    <input placeholder="Total" class="form-control" name="districts" type="number">
                </div>
                <div class="col-md-4">
                    <label>Health Facilities</label>
                    <input placeholder="Total" class="form-control" name="h_facilities" type="number">
                </div>
            </div>
            {{--@foreach($fundingAgencies as $agency )
                {{$agency->name}} | {{$agency->fundingagency_id}}

            @endforeach--}}

            <div class="row">
                <!-- /.col -->
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat ">Register</button>
                </div>
                <div class="col-xs-4 pull-left">
                    <button type="reset" class="btn btn-primary btn-block btn-flat ">Clear</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

    </div>
    <!-- /.form-box -->
</div>


<!-- /.register-box -->

<!-- FastClick -->
<script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>
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

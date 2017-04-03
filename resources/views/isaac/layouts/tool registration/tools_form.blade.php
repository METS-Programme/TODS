<body class="hold-transition register-page">
    <div class="box">

        <div class="box-body with-border">
            <div class="col-xs-12 col-sm-12 col-md-12">
            <p class="login-box-msg">Register a new tool</p>


        <div class="form-group">
            <strong>Tool Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>



            <div class="form-group">
                <strong>Tool Code:</strong>
                {!! Form::text('code', null, array('placeholder' => 'Code','class' => 'form-control')) !!}
            </div>


            <div class="form-group">
                <strong>Specification:</strong>
                {!! Form::text('specification', null, array('placeholder' => 'Specification','class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                <strong>Service_area:</strong>
                {!! Form::text('service_area', null, array('placeholder' => 'Service_area','class' => 'form-control')) !!}
            </div>

            <div class="form-group">
                <strong>Description:</strong>
                {!! Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')) !!}
            </div>


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
    </div>
</body>
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
</body>
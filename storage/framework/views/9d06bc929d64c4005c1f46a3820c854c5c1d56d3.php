<?php $__env->startSection('title'); ?>
    Tool Registration
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <body class="hold-transition register-page">
    <div class="register-box">

        <div class="register-box-body">
            <p class="login-box-msg">Register a new tool</p>
      <?php /*      <?php if(count($toolsAvailable)): ?>
            <h1>Total No of Tools Available</h1>
            <ul>
                <?php foreach($toolsAvailable as $key => $value): ?>
                <li><?php echo e($value); ?></li>
                <?php endforeach; ?>
            </ul>
            <?php endif; ?>*/ ?>

            <form action="store" method="post">

                <div class="form-group has-feedback">
                    <input name="tool-code" type="text" class="form-control" placeholder="Tool Code">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>

                <div class="form-group has-feedback">
                     <input name="tool-name" type="text" class="form-control" placeholder="Tool name">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input name="specification" type="email" class="form-control" placeholder="Specification">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input name="service" type="text" class="form-control" placeholder="Service">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input name="package" type="text" class="form-control" placeholder="Package">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input name="description" type="text" class="form-control" placeholder="Description">
                    <span class="glyphicon glyphicon form-control-feedback"></span>
                </div>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                <div class="row">
                    <!-- /.col -->
                    <div class="col-xs-4">
                            <p align="center"> <button type="submit" class="btn btn-primary btn-block btn-flat">Submit</button>
                    </div>
                    <div class="col-xs-4 pull-left">
                            <button type="reset" class="btn btn-primary">Clear</button> </p>
                    </div>
                    <!-- /.col -->
                </div>

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
    <?php $__env->stopSection(); ?>
    </body>
    </html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
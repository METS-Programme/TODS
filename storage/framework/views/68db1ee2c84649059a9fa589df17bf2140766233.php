<?php $__env->startSection('title'); ?>
    Registration Implementing Partner
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<body class="hold-transition register-page">
<?php if($errors->any()): ?>
    <ul class="alert alert-error">
        <?php foreach($errors->all() as $error): ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<div class="register-box" >

    <div class="register-box-body" id="myModal">
        <p class="login-box-msg">Register a new IP</p>

        <form action="<?php echo e(url('ips')); ?>" method="post">
            <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
            <div class="form-group has-feedback">
                <input type="text" name="name" class="form-control" placeholder="IP Name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <!-- radio -->
            <?php /*<div class="form-group">
                <label>
                    <input type="radio" name="comprehensive_partner"  id="no" value="No" class="flat-red" checked>
                    IP Not Comprehensive Partner
                </label>
                <label>
                    <input type="radio" name="comprehensive_partner" id="yes" value="Yes" class="flat-red">
                    IP is a Comprehensive Partner
                </label>

            </div>*/ ?>
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
            <?php /*<?php foreach($fundingAgencies as $agency ): ?>
                <?php echo e($agency->name); ?> | <?php echo e($agency->fundingagency_id); ?>


            <?php endforeach; ?>*/ ?>

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
<?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
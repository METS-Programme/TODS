<?php $__env->startSection('title'); ?>
    Registration Implementing Partner
<?php $__env->stopSection(); ?>



<html lang="en">
<head>
    <title>Import - Export Allocations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" >
</head>

<?php $__env->startSection('content'); ?>
<body>
<br/>
<br/>
<div class="container">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title" style="padding:12px 0px;font-size:25px;"><strong>Import export csv or excel file into database</strong></h3>
        </div>
        <div class="panel-body">

            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(Session::get('success')); ?>

                </div>
            <?php endif; ?>

            <?php if($message = Session::get('error')): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo e(Session::get('error')); ?>

                </div>
            <?php endif; ?>
                <h3>Import File Form:</h3>
                <form style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;" action="<?php echo e(URL::to('importExcel')); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                    <input type="file" name="import_file" />
                    <?php echo e(csrf_field()); ?>

                    <br/>

                    <button class="btn btn-primary">Import Excel or CSV File</button>

                </form>
        <br/>


        <h3>Download File From Database:</h3>
        <div style="border: 4px solid #a1a1a1;margin-top: 15px;padding: 20px;">
            <a href="<?php echo e(url('downloadExcel/xls')); ?>"><button class="btn btn-success btn-lg">Download Excel xls</button></a>
            <a href="<?php echo e(url('downloadExcel/xlsx')); ?>"><button class="btn btn-success btn-lg">Download Excel xlsx</button></a>
            <a href="<?php echo e(url('downloadExcel/csv')); ?>"><button class="btn btn-success btn-lg">Download CSV</button></a>
        </div>

    </div>
</div>
</div>


<script src="/bower_components/AdminLTE/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/bower_components/AdminLTE/dist/js/app.min.js"></script>
<!-- jQuery 2.2.3 -->
<script src="/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/bower_components/AdminLTE/plugins/iCheck/icheck.min.js"></script>

</body>
<?php $__env->stopSection(); ?>

</html>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
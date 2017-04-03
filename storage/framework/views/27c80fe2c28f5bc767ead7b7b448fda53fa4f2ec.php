<?php $__env->startSection('title'); ?>
    <h4>Registered IPS</h4>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <body>
    <div class="users-table">
        <?php echo $__env->make('errors.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-backdrop="static"
                data-target="#myModal">
            New tool Pickup
            <span class="glyphicon glyphicon-plus"></span>
        </button>
        <?php /*<div class="add-button" style="margin-bottom: 10px">
            <a href="url('/ips/create')" class="btn btn-primary" data-target="#myModal">
             <span class="glyphicon glyphicon-user"></span> Add IP
            </a>
        </div>*/ ?>
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
                            <?php /*<?php echo $__env->make('errors.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>
                            <?php /*<form action="<?php echo e(url('ips')); ?>" method="post">*/ ?>
                            <?php /*<?php echo $__env->make('includes.ipForm', ['submitButtonText' => 'Create Ip', 'clearButton'=> 'Clear'], array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>*/ ?>
                            <?php /*</form>*/ ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <?php /*List Registered Implementing partners*/ ?>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Available Tools to be pick by IPs</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
                <table id="example1" class="table table-bordered table-striped">
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
                    <?php ($i = 1); ?>
                    <?php foreach($ips as $ip): ?>
                        <tr>
                            <td><?php echo e($i); ?></td>
                            <td><a href="#"><?php echo e($ip['name']); ?></a></td>
                            <td><?php echo e($ip['comprehensive_partner']); ?></td>
                            <td>
                                <?php echo e($ip['funding_agency']['short_name']); ?>

                            </td>
                            <td><?php echo e($ip['created_at']); ?></td>
                            <td colspan="2">
                                <a href="#" class="btn btn-default btn-sm">View List & Print
                                    <span class="glyphicon glyphicon-eye-open"></span>
                                    <span class="glyphicon glyphicon-print"></span>
                                </a>
                            </td>
                        </tr>
                        <?php ($i++); ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
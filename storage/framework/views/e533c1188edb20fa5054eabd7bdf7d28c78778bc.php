<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deliveries</h2>
            </div>
            <div class="pull-right">
                <div class="pull-right">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newdelivery">
                        Enter new delivery
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- div for new delivery pop up dialog-->
    <div class="modal fade" id="newdelivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" style="text-align: center;">Enter new delivery</h4>
                </div>

                <div class="modal-body">
                    <?php echo e(Form::open(array('route'=>'deliveryCRUD.store','method'=>'POST'))); ?>

                        <div class="form-group">
                            <strong>Printing Agency:</strong>
                            <?php echo Form::text('printing_agency', null, array('placeholder' => 'printing_agency','class' => 'form-control')); ?>

                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <strong>Date delivered:</strong>
                                <?php echo Form::date('date_delivered', null, array('placeholder' => 'Date delivered','class' => 'form-control')); ?>

                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <strong>Print Order Number:</strong>
                            <?php echo Form::text('print_order_number', null, array('placeholder' => 'print order number','class' => 'form-control')); ?>

                            <?php echo e(Form::select('printorder_id', $ordernumber, null)); ?>

                        </div>

                    <div class="form-group">
                        <label for="login-password">Quantity Ordered</label>
                        <?php echo Form::number('quantity_ordered', null, array('placeholder' => 'Quantity','class' => 'form-control')); ?>

                    </div>

                    <div class="form-group">
                        <label for="login-password">Tools duration</label>
                        <?php echo Form::text('tools_duration', null, array('placeholder' => 'Tool duration','class' => 'form-control')); ?>

                    </div>
                    <?php echo e(Form::submit('Place order', array('class' => 'btn btn-info btn-block'))); ?>

                    <hr>
                    <?php echo e(Form::close()); ?>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
    <!--place new order ends -->
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>printing agency</th>
            <th>Date delivered</th>
            <th>Delivered by</th>
            <th width="280px">Action</th>
        </tr>
        <?php foreach($ordernumber as $delivery): ?>
            <tr>
                <td><?php echo e($delivery->delivery_id); ?></td>
                <td><?php echo e($delivery->printing_agency); ?></td>
                <td><?php echo e($delivery->date_delivered); ?></td>
                <td><?php echo e($delivery->delivered_by); ?></td>

                <td>
                    <a class="btn btn-info" href="<?php echo e(route('deliveryCRUD.show',$delivery->delivery_id)); ?>">Show</a>
                    <a class="btn btn-primary" href="<?php echo e(route('deliveryCRUD.edit',$delivery->delivery_id)); ?>">Edit</a>
                    <?php echo Form::open(['method' => 'DELETE','route' => ['deliveryCRUD.destroy', $delivery->delivery_id],'style'=>'display:inline']); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; ?>
    </table>
   <?php /* <?php echo $delivery->render(); ?> */ ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
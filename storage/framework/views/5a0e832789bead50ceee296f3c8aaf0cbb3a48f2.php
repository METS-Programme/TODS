<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="tools">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newTool">
                    Register new tool
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
            </div>
        </div>
    </div>
    <!-- div for register new tool pop up dialog-->
    <div class="modal fade" id="newTool" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" style="text-align: center;">Register new tool</h4>
                </div>
                <div class="modal-body">
                    <?php echo Form::open(array('route' => 'tools.store','method'=>'POST')); ?>


                <div class="form-group row">
                    <div class="col-md-3"><strong>Tool Name:</strong></div>
                    <div class="col-md-9"><?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?></div>
                </div>



                <div class="form-group row">
                    <div class="col-md-3"><strong>Tool Code:</strong></div>
                    <div class="col-md-9"><?php echo Form::text('code', null, array('placeholder' => 'Code','class' => 'form-control')); ?></div>
                </div>


                <div class="form-group row">
                    <div class="col-md-3"><strong>Specification:</strong></div>
                    <div class="col-md-9"><?php echo Form::text('specification', null, array('placeholder' => 'Specification','class' => 'form-control')); ?></div>
                </div>

                    <div class="form-group row">
                        <div class="col-md-3"><strong>Service area:</strong></div>
                        <div class="col-md-9"><?php echo e(Form::select('servicearea_id', $serviceareafortool, null)); ?></div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3"><strong>Package Id:</strong></div>
                        <div class="col-md-9"><?php echo e(Form::select('package_id', $packagefortool, null)); ?></div>
                    </div>

                <div class="form-group">
                    <strong>Description:</strong>
                    <?php echo Form::textarea('description', null, array('placeholder' => 'Description','class' => 'form-control')); ?>

                </div>
                 <div class="row">
                     <div class="col-md-3"></div>
                     <div class="col-md-6"><?php echo e(Form::submit('Register tool', array('class' => 'btn btn-info btn-block'))); ?></div>
                     <div class="col-md-3"></div>
                </div>
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
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Registered Tools</h3>
        </div>

        <div class="box-body no-padding">
    <table class="table table-bordered table-striped">
        <thead>
        <tr >
            <th>Id</th>
            <th>Name</th>
            <th>Code</th>
            <th>Specification</th>
            <th>Description</th>
            <th>Stock Status</th>
            <th width="280px">Action</th>
        </tr>
        </thead>
        <tbody>
        <?php ($i = 1); ?>
        <?php foreach($tools as $tool): ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($tool->name); ?></td>
                <td><?php echo e($tool->code); ?></td>
                <td><?php echo e($tool->specification); ?></td>
                <td><?php echo e($tool->description); ?></td>
                <td><?php echo e($tool->stock_status); ?></td>
                <?php ($i++); ?>
                <td>
                    <!-- show tool -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#showTool">
                        Show
                    </button>
                    <div class="modal fade" id="showTool" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" style="text-align: center;">Tool details</h4>
                                </div>
                                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2> Show Tool details</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="<?php echo e(route('tools.index')); ?>"> Back</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <?php echo e($tool->name); ?>

                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Code:</strong>
                                <?php echo e($tool->code); ?>

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Specification:</strong>
                                <?php echo e($tool->specification); ?>

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Service area:</strong>
                                <?php echo e($tool->service_area); ?>

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Package:</strong>
                                <?php echo e($tool->package_id); ?>

                            </div>
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Description:</strong>
                                <?php echo e($tool->description); ?>

                            </div>
                        </div>
                    </div>
                                </div>
                                </div>
                                </div>
                                </div>
                    <!--show tool ends -->
                    <!-- edit tool -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editTool">
                        Edit
                    </button>

                    <div class="modal fade" id="editTool" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title" style="text-align: center;">Edit tool</h4>
                                </div>
                                <div class="modal-body">
                                    <?php echo Form::model($tool, ['method' => 'PATCH','route' => ['tools.update', $tool->tools_id]]); ?>

                                    <div class="form-group">
                                        <strong>Tool Name:</strong>
                                        <?php echo Form::text('name', $tool->name, array('placeholder' => 'Name','class' => 'form-control')); ?>

                                    </div>



                                    <div class="form-group">
                                        <strong>Tool Code:</strong>
                                        <?php echo Form::text('code', $tool->code, array('placeholder' => 'Code','class' => 'form-control')); ?>

                                    </div>


                                    <div class="form-group">
                                        <strong>Specification:</strong>
                                        <?php echo Form::text('specification', $tool->specification, array('placeholder' => 'Specification','class' => 'form-control')); ?>

                                    </div>

                                    <div class="form-group">
                                        <strong>Service area:</strong>
                                        <?php echo Form::select('service_area'); ?>

                                    </div>

                                    <div class="form-group">
                                        <strong>Description:</strong>
                                        <?php echo Form::textarea('description', $tool->description, array('placeholder' => 'Description','class' => 'form-control')); ?>

                                    </div>

                                    <?php echo e(Form::submit('Edit tool', array('class' => 'btn btn-info btn-block'))); ?>

                                    <hr>
                                    <?php echo e(Form::close()); ?>

                                </div>
                            </div>
                        </div>
                    </div>


                    <!--edit tool ends-->

                    <!-- delete tool begins -->
                 <?php echo Form::open(['method' => 'DELETE','route' => ['tools.destroy', $tool->tools_id],'style'=>'display:inline']); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>

                    <?php echo Form::close(); ?>


                </td>
            </tr>
           <?php endforeach; ?>
          </tbody>
         </table>
        </div>
    </div>
    <?php /*<?php echo $tools->render(); ?>*/ ?>
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
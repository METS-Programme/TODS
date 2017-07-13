<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <?php /*<div class="orders-table">*/ ?>
                <?php /*<h2>Orders placed</h2>*/ ?>
            <?php /*</div>*/ ?>
            <div class="oders">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#myModal">
                    Place New Order
                    <span class="glyphicon glyphicon-plus"></span>
                </button>
                <?php /*<a href="#" class="btn btn-primary btn-sm">Place New Order</a>*/ ?>
            </div>
        </div>
    </div>

    <!-- div for place new order pop up dialog-->
    <?php /*<div class='container'>*/ ?>
    <div class="col-lg-12-column">
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title" style="text-align: center;">Place new order</h4>
            </div>

            <div class="modal-body">
                <?php echo e(Form::open(array('route'=>'printorderCRUD.store','method'=>'POST'))); ?>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">LPO number</label>
                            <?php echo Form::text('lpo_number', null, array('placeholder' => 'LPO number','class' => 'form-control')); ?>

                        </div>
                        <div class="col-md-3">
                            <label for="">Date-ordered</label>
                            <?php echo Form::date('date_ordered', null, array('placeholder' => 'Date ordered','class' => 'form-control')); ?>

                        </div>
                        <div class="col-md-2">
                            <label for="">Tool Duration</label>
                            <?php echo e(Form::text('tools_duration', null, array('placeholder' => 'Quarter','class' => 'form-control'))); ?>

                        </div>
                        <div class="col-md-2">
                            <label for="">Ordered By</label>
                            <?php echo Form::text('ordered_by', null, array('placeholder' => 'METS','class' => 'form-control')); ?>

                        </div>
                        <div class="col-md-2">
                            <label for="">Ordered To</label>
                            <?php echo Form::text('ordered_to', null, array('placeholder' => 'In-Line','class' => 'form-control')); ?>

                        </div>
                    </div>
                </div>
                <div class="box-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="row">
                            <th class="col-md-1">#No</th>
                            <th class="col-md-7">HMIS Tool</th>
                            <th class="col-md-4">Quantity</th>
                            <?php /*<th>Operations</th>*/ ?>
                        </tr>
                    </thead>
                    <tbody>
                    <?php ($i = 1); ?>
                    <?php foreach($toolname as $key=>$tool): ?>
                        <tr class="row">
                            <td class="col-md-1"><?php echo e($i); ?></td>
                            <?php /*<td><?php echo e(Form::select('tools_id', $toolname, null)); ?></td>*/ ?>
                            <td class="col-md-7">
                                <?php /*<?php echo e(Form::text('tools_id', $tool, array('placeholder' => $tool,'class' => 'form-control', 'readonly' => 'true'))); ?>*/ ?>
                                <select name="tools_id[]" class="form-control" readonly= "true">
                                    <option value="<?php echo e($key); ?>"><?php echo e($tool); ?></option>
                                </select>
                            </td>
                            <td class="col-md-4"><?php echo e(Form::number('quantity_ordered[]', null, array('placeholder' => '0','class' => 'form-control'))); ?></td>
                            <?php /*<td>*/ ?>
                                <?php /*<span><button class="add_field_button btn btn-sm btn-info btn-add-another-tool ">Add another tool</button></span>*/ ?>
                                <?php /*<span><a href="#" class="btn btn-xs btn-danger btn-remove">Remove</a></span>*/ ?>
                            <?php /*</td>*/ ?>
                        </tr>
                    <?php ($i++); ?>
                    <?php endforeach; ?>
                    </tbody>
                    <?php /*<tbody class="input_fields_wrap">*/ ?>
                        <?php /*<tr class="">*/ ?>
                            <?php /*<td></td>*/ ?>
                            <?php /*<td><?php echo e(Form::select('tools_id', $toolname, null)); ?></td>*/ ?>
                            <?php /*<td><?php echo e(Form::text('tools_duration', null, array('placeholder' => 'Tool duration','class' => 'form-control'))); ?></td>*/ ?>
                            <?php /*<td><?php echo e(Form::number('quantity_ordered', null, array('placeholder' => 'Quantity','class' => 'form-control'))); ?></td>*/ ?>
                            <?php /*<td>*/ ?>
                                <?php /*<span><button class="add_field_button btn btn-sm btn-info btn-add-another-tool ">Add another tool</button></span>*/ ?>
                                <?php /*<span><a href="#" class="btn btn-xs btn-danger btn-remove">Remove</a></span>*/ ?>
                            <?php /*</td>*/ ?>
                        <?php /*</tr>*/ ?>

                    <?php /*</tbody>*/ ?>
                </table>
                </div>
                <div class="form-group">
                    <label for="login-password">General Comments</label>
                    <?php echo Form::textarea('comment', null, array('placeholder' => 'Comments','class' => 'form-control','rows' => '5')); ?>

                </div>


                <?php /*<div class="input_fields_wrap">*/ ?>
                    <?php /*<button class="add_field_button">Add More Fields</button>*/ ?>
                    <?php /*<div><input type="text" name="mytext[]"></div>*/ ?>
                <?php /*</div>*/ ?>
                <?php /*<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>*/ ?>



                <div class="form-group">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <?php echo e(Form::submit('Submit', array('class' => 'btn btn-info btn-block'))); ?>

                            <?php echo e(Form::close()); ?>

                        </div><div class="col-md-4"></div>
                    </div>
                </div>


        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
    </div>
    </div>
    <!--place new order ends -->
    <?php /*<?php if($message = Session::get('success')): ?>*/ ?>
        <?php /*<div class="alert alert-success">*/ ?>
            <?php /*<p><?php echo e($message); ?></p>*/ ?>
        <?php /*</div>*/ ?>
    <?php /*<?php endif; ?>*/ ?>
    <?php /*</div>*/ ?>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>No</th>
            <th>LPO number</th>
            <th>Date_ordered</th>
            <th>Tools duration</th>
            <th>Ordered By</th>
            <th>Comment</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php ($i=1); ?>
        <?php foreach($printorders as $printorder): ?>
            <tr>
                <td><?php echo e($i); ?></td>
                <td><?php echo e($printorder->lpo_number); ?></td>
                <td><?php echo e($printorder->date_ordered); ?></td>
                <td><?php echo e($printorder->tools_duration); ?></td>
                <td><?php echo e($printorder->ordered_by); ?></td>
                <td><?php echo e($printorder->comment); ?></td>
                <td>
                    <a class="btn btn-primary" href="<?php echo e(route('printorderCRUD.show',$printorder->printorder_id)); ?>">View Order Details <span class="fa fa-list-alt"></span></a>
                    <?php /*<a class="btn btn-primary btn-success" href="<?php echo e(route('printorderCRUD.show',$printorder->printorder_id)); ?>">Add New Delivery <span class="fa fa-truck"></span></a>*/ ?>
                    <!-- edit print order -->
                    <?php /*<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal-edit"> Edit </button>*/ ?>
                    <?php /*<div class="modal fade" id="myModal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/ ?>
                        <?php /*<div class="modal-dialog modal-sm">*/ ?>
                            <?php /*<div class="modal-content">*/ ?>
                                <?php /*<div class="modal-header">*/ ?>
                                    <?php /*<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>*/ ?>
                                    <?php /*<h4 class="modal-title" style="text-align: center;">Edit Order</h4>*/ ?>
                                <?php /*</div>*/ ?>

                                <?php /*<div class="modal-body">*/ ?>
                                    <?php /*<?php echo Form::model($printorder, ['method' => 'PATCH','route' => ['printorderCRUD.update', $printorder->printorder_id]]); ?>*/ ?>
                                    <?php /*<div class="form-group">*/ ?>
                                        <?php /*<label for="login-email">LPO number</label>*/ ?>
                                        <?php /*<?php echo Form::text('lpo_number', null, array('placeholder' => 'LPO number','class' => 'form-control')); ?>*/ ?>
                                    <?php /*</div>*/ ?>
                                    <?php /*<div class="form-group">*/ ?>
                                        <?php /*<label for="login-password">Date-ordered</label>*/ ?>
                                        <?php /*<?php echo Form::date('date_ordered', null, array('placeholder' => 'Date ordered','class' => 'form-control')); ?>*/ ?>
                                    <?php /*</div>*/ ?>
                                    <?php /*<table>*/ ?>
                                        <?php /*<tr>*/ ?>
                                            <?php /*<td>*/ ?>
                                    <?php /*<div class="form-group ">*/ ?>
                                        <?php /*<label for="login-password">Tool name and code</label>*/ ?>
                                        <?php /*<?php echo Form::text('tool_name_and_code', null, array('placeholder' => 'Tool name and code','class' => 'form-control')); ?> */ ?>
                                        <?php /*<?php echo e(Form::select('tools_id', $toolname, null)); ?>*/ ?>
                                    <?php /*</div>*/ ?>
                                            <?php /*</td>*/ ?>
                                            <?php /*<td>*/ ?>

                                    <?php /*<div class="form-group">*/ ?>
                                        <?php /*<label for="login-password">Quantity Ordered</label>*/ ?>
                                        <?php /*<?php echo Form::text('quantity_ordered', null, array('placeholder' => 'Quantity','class' => 'form-control')); ?>*/ ?>
                                    <?php /*</div>*/ ?>
                                            <?php /*</td>*/ ?>

                                        <?php /*</tr>*/ ?>
                                    <?php /*</table>*/ ?>

                                    <?php /*<div class="form-group">*/ ?>
                                        <?php /*<label for="login-password">Tools duration</label>*/ ?>
                                        <?php /*<?php echo Form::text('tools_duration', null, array('placeholder' => 'Tool duration','class' => 'form-control')); ?>*/ ?>
                                    <?php /*</div>*/ ?>

                                    <?php /*<div class="form-group">*/ ?>
                                        <?php /*<label for="login-password">Comments</label>*/ ?>
                                        <?php /*<?php echo Form::textarea('comment', null, array('placeholder' => 'Comments','class' => 'form-control')); ?>*/ ?>
                                    <?php /*</div>*/ ?>

                                    <?php /*<?php echo e(Form::submit('Edit order', array('class' => 'btn btn-info btn-block'))); ?>*/ ?>

                                    <?php /*<hr>*/ ?>
                                    <?php /*<?php echo e(Form::close()); ?>*/ ?>
                                <?php /*</div>*/ ?>
                            <?php /*</div><!-- /.modal-content -->*/ ?>
                        <?php /*</div><!-- /.modal-dialog -->*/ ?>
                    <?php /*</div>*/ ?>



                    <!--delete order -->
                    <?php /*<?php echo Form::open(['method' => 'DELETE','route' => ['printorderCRUD.destroy', $printorder->printorder_id],'style'=>'display:inline']); ?>*/ ?>
                    <?php /*<?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>*/ ?>
                    <?php /*<?php echo Form::close(); ?>*/ ?>
                </td>
            </tr>
            <?php ($i++); ?>
        <?php endforeach; ?>
        </tbody>
    </table>
    <?php /*<?php echo $printorders->render(); ?>*/ ?>

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
    <?php /*<script>*/ ?>
        <?php /*var template ='<div class="form-group tool-select-container">'+*/ ?>
            <?php /*'<label for="login-password">Tool name and code</label>'+*/ ?>
        <?php /*'<?php echo e(Form::select('tools_id', $toolname, null)); ?>'+*/ ?>
        <?php /*'<a href="#" class="btn btn-xs btn-danger btn-remove">Remove</a>'+*/ ?>
            <?php /*'</div>'*/ ?>
    <?php /*$('.btn-add-another-tool').on('Click', function(e){*/ ?>
        <?php /*e.preventDefault();*/ ?>
        <?php /*$(this).before(template);*/ ?>

    <?php /*})*/ ?>
    <?php /*</script>*/ ?>
        <?php /*<script>*/ ?>
            <?php /*$(document).ready(function() {*/ ?>
                <?php /*var max_fields      = 10; //maximum input boxes allowed*/ ?>
                <?php /*var wrapper         = $(".input_fields_wrap"); //Fields wrapper*/ ?>
                <?php /*var add_button      = $(".add_field_button"); //Add button ID*/ ?>

                <?php /*var x = 1; //initlal text box count*/ ?>
                <?php /*$(add_button).click(function(e){ //on add input button click*/ ?>
                    <?php /*e.preventDefault();*/ ?>
                    <?php /*if(x < max_fields){ //max input box allowed*/ ?>
                        <?php /*x++; //text box increment*/ ?>
                        <?php /*$("#rm").remove();*/ ?>
<?php /*//                        $(wrapper).append('<tr id="divs">');*/ ?>
                        <?php /*$(wrapper).append('<tr><td id="divs"><?php echo e(Form::select("mytext[]", $toolname, null)); ?></td>'); //add input box*/ ?>
                        <?php /*$(wrapper).append('<td id="divs"><?php echo e(Form::text("mytext[]", null, array("placeholder" => "Tool duration","class" => "form-control"))); ?></td>'); //add input box*/ ?>
                        <?php /*$(wrapper).append('<td id="divs"><?php echo e(Form::number("mytext[]", null, array("placeholder" => "Quantity","class" => "form-control"))); ?></td>'); //add input box*/ ?>
                        <?php /*$(wrapper).append('<td id="divs"><a href="#" id="rm" class="remove_field btn btn-xs btn-danger btn-remove">Remove</a></td></tr>'); //add input box*/ ?>
<?php /*//                        $(wrapper).append('</tr>');*/ ?>
                    <?php /*}*/ ?>
                <?php /*});*/ ?>

                <?php /*$(wrapper).on("click",".remove_field", function(e){ //user click on remove text*/ ?>
                    <?php /*e.preventDefault(); $("#divs").remove(); x--;*/ ?>
                    <?php /*$("#divs").remove(); x--;*/ ?>
                    <?php /*$("#divs").remove(); x--;*/ ?>
                    <?php /*$("#divs").remove(); x--;*/ ?>

                <?php /*})*/ ?>
            <?php /*});*/ ?>
        <?php /*</script>*/ ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
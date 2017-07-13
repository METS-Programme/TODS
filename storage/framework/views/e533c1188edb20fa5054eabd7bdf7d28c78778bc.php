<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TODS | IP Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="deliveries">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#newdelivery">
                    Enter new delivery
                </button>
            </div>
        </div>
    </div>

    <!-- div for place new order pop up dialog-->
    <?php /*<div class='container'>*/ ?>
    <?php /*<html class="col-lg-12-column">*/ ?>
    <?php /*<p style="color: red"><strong>To add new deliveries go to > <a href="<?php echo e(url('printorderCRUD')); ?>">Print Orders</a></strong></p>*/ ?>
    <div class="modal fade" id="newdelivery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                    <h4 class="modal-title" style="text-align: center;">Place new Delivery</h4>
                </div>

                <div class="modal-body">
                    <?php echo e(Form::open(array('route'=>'deliveryCRUD.store','method'=>'POST'))); ?>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="">LPO number / Order No:</label>
                                <?php echo Form::select('lpo_number', $printorders , null, array('placeholder' => 'Select LPO Number','class' => 'form-control')); ?>

                                <?php echo Form::hidden('printingorder_id', 1, array('placeholder' => 'Select LPO Number','class' => 'form-control')); ?>

                            </div>
                            <div class="col-md-3">
                                <label for="">Date-delivered</label>
                                <?php echo Form::date('date_delivered', null, array('placeholder' => 'Date ordered','class' => 'form-control')); ?>

                            </div>
                            <?php /*<div class="col-md-2">*/ ?>
                                <?php /*<label for="">Tool Duration</label>*/ ?>
                                <?php /*<?php echo e(Form::text('tools_duration', null, array('placeholder' => 'Quarter','class' => 'form-control'))); ?>*/ ?>
                            <?php /*</div>*/ ?>
                            <div class="col-md-3">
                                <label for="">Delivered By</label>
                                <?php echo Form::text('delivered_by', null, array('placeholder' => 'Inline','class' => 'form-control')); ?>

                            </div>
                            <div class="col-md-3">
                                <label for="">Received By To</label>
                                <?php echo Form::text('received_by', null, array('placeholder' => 'METS','class' => 'form-control')); ?>

                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr class="row">
                                <th class="">#No</th>
                                <th class="">HMIS Tool Name</th>
                                <th class="">QTY Delivered</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php ($i = 1); ?>
                            <?php foreach($toolname as $key=>$tool): ?>
                            <tr class="row">
                                <td class=""><?php echo e($i); ?></td>
                                <?php /*<td><?php echo e(Form::select('tools_id', $toolname, null)); ?></td>*/ ?>
                                <td class="">
                                    <select name="tools_id[]" class="form-control" readonly= "true">
                                        <option value="<?php echo e($key); ?>"><?php echo e($tool); ?></option>
                                    </select>
                                </td>
                                <td class="">
                                    <?php echo e(Form::number('quantity_delivered[]', null, array('placeholder' => '0','class' => 'form-control'))); ?>

                                </td>
                            </tr>
                            <?php ($i++); ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <label for="login-password">General Comments</label>
                        <?php echo Form::textarea('comment', null, array('placeholder' => 'Comments','class' => 'form-control','rows' => '5')); ?>

                    </div>
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
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Deliveries</h3>
        </div>

        <div class="box-body no-padding">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>No</th>
                    <th>LPO Number</th>
                    <th>Delivered by</th>
                    <th>Date delivered</th>
                    <th>Received by</th>
                    <th>Comment</th>
                    <th width="280px">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php ($i = 1); ?>
                <?php foreach($ordernumber as $delivery): ?>
                    <tr>
                        <td><?php echo e($i); ?></td>
                        <td><?php echo e($delivery->lpo_number); ?> </td>
                        <td><?php echo e($delivery->delivered_by); ?></td>
                        <td><?php echo e($delivery->date_delivered); ?></td>
                        <td><?php echo e($delivery->received_by); ?></td>
                        <td><?php echo e($delivery->comment); ?></td>
                        <td>
                            <a class="btn btn-info" href="<?php echo e(route('deliveryCRUD.show',$delivery->delivery_id)); ?>">View Delivery Details</a>
                            <?php /*<a class="btn btn-primary" href="<?php echo e(route('deliveryCRUD.edit',$delivery->delivery_id)); ?>">Edit</a>*/ ?>
                            <?php /*<?php echo Form::open(['method' => 'DELETE','route' => ['deliveryCRUD.destroy', $delivery->delivery_id],'style'=>'display:inline']); ?>*/ ?>
                            <?php /*<?php echo Form::submit('Delete', ['class' => 'btn btn-danger']); ?>*/ ?>
                            <?php echo Form::close(); ?>

                        </td>
                    </tr>
                    <?php ($i++); ?>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</html>


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
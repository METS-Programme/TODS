<div class="box box-default">
    <div class="box-header with-border">

    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group has-feedback">
                    <?php echo Form::label('items', 'Implementing Partner:'); ?>

                    <?php echo Form::select('items', $items, null ); ?>

                </div>
            </div>
            <!-- /.col -->
            <div class="col-md-4">
                <div class="form-group">
                    <?php echo Form::label('orderNumber', 'Order Number' ); ?>

                    <?php echo Form::number('orderNumber', 'value'); ?>

                    <?php /*<input type="text" class="form-control" placeholder="Enter ...">*/ ?>
                </div>
            </div>
            <!-- /.form-group -->
            <div class="col-md-4">
                <div class="form-group">
                    <div class="form-group">
                        <?php echo Form::label('date', 'Date Picked' ); ?>

                        <div class="input-group date">
                            <?php echo Form::date('date', \Carbon\Carbon::now()); ?>

                            <?php /*<input type="text" class="form-control pull-right" id="datepicker">*/ ?>
                        </div>
                        <!-- /.input group -->

                    </div>
                </div>
                <!-- /.form-group -->

            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.box-body -->
</div>
<!-- /.box -->


<?php /*<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
    <div class="form-group has-feedback">
        <input type="text" name="name" class="form-control" placeholder="IP Name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
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
            <?php foreach($items as $item): ?>
                <option value="<?php echo e($item->fundingagency_id); ?>"><?php echo e($item->short_name); ?></option>
            <?php endforeach; ?>

            */ ?><?php /*<?php echo Form::select('items', $items, null ); ?>*/ ?><?php /*
            */ ?><?php /*<option value="1">CDC</option>
            <option value="2">USAID</option>*/ ?><?php /*
        </select>
    </div>
    */ ?><?php /*<?php foreach($fundingAgencies as $agency ): ?>
        <?php echo e($agency->name); ?> | <?php echo e($agency->fundingagency_id); ?>


    <?php endforeach; ?>*/ ?><?php /*

    <div class="row modal-footer">
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat "><?php echo e($submitButtonText); ?></button>
        </div>
        <div class="col-xs-4 ">
            <button type="reset" class="btn btn-primary btn-block btn-flat"><?php echo e($clearButton); ?></button>
        </div>
        <!-- /.col -->
    </div>*/ ?>

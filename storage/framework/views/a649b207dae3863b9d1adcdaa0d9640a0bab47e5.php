
<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
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
        <div class="row">
            <div class="col-md-4">
                <label>Funding Agency</label>
                <select class="form-control" name="funding_agency_id">
                    <?php foreach($items as $key=>$value): ?>
                        <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="image">Upload Logo</label>
                    <input type="file" id="image" name="image">
                </div>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label>Supported Number of:</label>
        <div class="row">
            <div class="col-md-6">
                <input placeholder="Regions" class="form-control" name="regions" type="number">
            </div>
            <div class="col-md-6">
                <input placeholder="Districts" class="form-control" name="districts" type="number">
            </div>

        </div>
    </div>
    <div class="form-group">
       <div class="row">
            <div class="col-md-6">
                <label>Vision</label>
                <textarea class="form-control" rows="2" placeholder="Enter ..." name="vision"></textarea>
            </div>
            <div class="col-md-6">
                <label>Location</label>
                <textarea class="form-control" rows="2" placeholder="Enter ..." name="location"></textarea>
            </div>
       </div>
    </div>
    <div class="form-group">
        <label>More About IP</label>
        <textarea class="form-control" rows="2" placeholder="Enter more details like Program areas..." name="about"></textarea>
    </div>
    <?php /*<?php foreach($fundingAgencies as $agency ): ?>
        <?php echo e($agency->name); ?> | <?php echo e($agency->fundingagency_id); ?>


    <?php endforeach; ?>*/ ?>


    <div class="row modal-footer">
        <!-- /.col -->
        <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat "><?php echo e($submitButtonText); ?></button>
        </div>
        <div class="col-xs-4 ">
            <button type="reset" class="btn btn-primary btn-block btn-flat"><?php echo e($clearButton); ?></button>
        </div>
        <!-- /.col -->
    </div>

<?php /*General Errors*/ ?>
<?php if($errors->any()): ?>
    <ul class="alert alert-error">
        <?php foreach($errors->all() as $error): ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
<?php /*Errors for Import Export Process*/ ?>
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
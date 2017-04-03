<?php $__env->startSection('title'); ?>
    <h4>Registered Users</h4>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
 <body>
    <div class="users-table">
        <?php /*<?php echo e($users); ?>*/ ?>
       <a href="<?php echo e(url('/people')); ?>" class="btn btn-primary">Back to List</a>
        <h3 class="box-title"><?php echo e($users->firstname); ?> <?php echo e($users->lastname); ?> <?php echo e($users->othernames); ?></h3>
        <div class="col-md-2">
            <strong>Organisation/IP:</strong><br/>
            <strong>User Name:</strong><br/>
            <strong>Email:</strong><br/>
            <strong>Phone Numbers:</strong><br/>
            <strong>Member Since</strong>
        </div>
        <div class="col-md-6 pull-left">
            <span><?php echo e($users->ip); ?></span><br/>
            <span><?php echo e($users->username); ?></span><br/>
            <span><?php echo e($users->emailaddress); ?></span><br/>
            <span><?php echo e($users->phoneone); ?>/<?php echo e($users->phonetwo); ?>/<?php echo e($users->phonethree); ?></span><br/>
            <span><?php echo e(date_format($users->created_at, 'j/M/Y')); ?></span>
        </div>


    </div>
 </body>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
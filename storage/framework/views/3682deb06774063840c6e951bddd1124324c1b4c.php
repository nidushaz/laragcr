<?php $__env->startSection('title'); ?>
<?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> | User
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">

    <div class="account-pages"></div>
    <div class="clearfix"></div>

    <div class="wrapper-page">
        <div class="ex-page-content text-center">
            <div class="text-error"><span class="text-primary">4</span><i class="ti-face-sad text-pink"></i><span class="text-info">3</span></div>
            <h2>Forbidden</h2><br>
            <p class="text-muted">You don't have permission to access on this page.</p>
            <br>
            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('admin-dashboard')); ?>"> Return Dashboard</a>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.adminLayouts2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
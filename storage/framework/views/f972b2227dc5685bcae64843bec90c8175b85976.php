<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <?php echo $__env->make('admin.include.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
<body>
    <!-- admin header -->
    <header class="row">
        <?php echo $__env->make('admin.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
    <div id="app" class="container-fluid">
        <div class="row">
            <!-- admin sidebar -->
            <div class="col-sm-3 col-md-2 sidebar">
                <?php echo $__env->make('admin.include.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <!-- admin content -->
            <div class="col-sm-9 col-md-10 content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <!-- admin footer -->
        <footer class="row">
            <?php echo $__env->make('admin.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </footer>
    </div><!-- end admin container -->
</body>
</html>

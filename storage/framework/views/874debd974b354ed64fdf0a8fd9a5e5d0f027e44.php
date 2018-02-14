<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
    <head>
        <?php echo $__env->make('admin.include.headTemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
    <body>
        <div class="wrapper">
            <!-- side bar section -->
            <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
                <?php echo $__env->make('admin.include.sidebarTemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <!-- end side bar section -->
            <div class="main-panel">
            <!-- header section -->
                <?php echo $__env->make('admin.include.headerTemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <!-- end header section -->

            <!-- content section -->
                <div class="content">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            <!-- end content section -->

            <!-- header section -->
            <footer class="footer">
                <?php echo $__env->make('admin.include.footerTemp', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </footer>
            <!-- end header section -->
            </div>
        </div>
        <!-- header section -->
            <?php echo $__env->make('admin.include.jsLibraries', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- end header section -->

    </body>
</html>

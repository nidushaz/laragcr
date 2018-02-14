<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <?php echo $__env->make('admin.include.headBolt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">

        <!-- top bar -->
        <?php echo $__env->make('admin.include.headerBolt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- top bar end -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            <?php echo $__env->make('admin.include.leftSidebarBolt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
            <!-- end content content -->

            <footer class="footer text-right">
                <?php echo $__env->make('admin.include.footerBolt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

        <!-- Right Sidebar -->
        <div class="side-bar right-bar nicescroll">
            <?php echo $__env->make('admin.include.rightSidebarBolt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <!-- End Right Sidebar -->
    </div>
    <!-- end mai wrapper -->

    <?php echo $__env->make('admin.include.jsBolt', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</body>
</html>

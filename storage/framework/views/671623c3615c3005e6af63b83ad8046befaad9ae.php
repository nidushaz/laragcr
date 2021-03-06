<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('front-end.include.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</head>
<body>
<header>
    <?php echo $__env->make('front-end.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</header>
<div class="clearfix"></div>

<div class="row-fluid">

    <?php echo $__env->yieldContent('content'); ?>

</div>

<footer>
    <?php echo $__env->make('front-end.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</footer>


<?php echo $__env->make('front-end.include.jsLib', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>

</html>

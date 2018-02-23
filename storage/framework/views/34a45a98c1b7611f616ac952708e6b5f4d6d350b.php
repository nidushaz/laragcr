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
<section class="bnrSection" id="main-slider">
    <div class="container">
        <div class="col-md-2 col-xs-12">
            <?php echo $__env->make('front-end.include.leftsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-8 col-xs-12  minSlide">
            <?php echo $__env->make('front-end.include.banner-area', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-2 col-xs-12">
            <?php echo $__env->make('front-end.include.rightsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</section>
    <section>
<div class="row">

    <?php echo $__env->yieldContent('content'); ?>

</div>
    </section>
<footer>
    <?php echo $__env->make('front-end.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</footer>


    <?php echo $__env->make('front-end.include.jsLib', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>

</html>

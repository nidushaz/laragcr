<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>

<?php $__env->startSection('content'); ?>

    <div class="inner">
		<div class="flt text-center"><h2>About GCR</h2><hr/></div>
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                 <?php echo $content->getDescription(); ?>

            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
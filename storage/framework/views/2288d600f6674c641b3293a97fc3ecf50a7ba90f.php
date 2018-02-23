<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-9 col-sm-9 col-xs-12 mobPdnone">
            <?php if(@isset($new)): ?>
                <div class="col-md-12 col-xs-12 newsInner" style="margin: 25px 0 25px 0;">
                    <h2><?php echo e($new->getNewsHeading()); ?></h2>
                    <p>GCR News [ <?php echo e($new->getUpdatedAt()->format('l, d F Y')); ?> ]</p>
                    <img src="<?php echo e(asset($new->getThumbnail())); ?>" alt="<?php echo e($new->getNewsHeading()); ?>" class="img-responsive">
                    <div>
                        <?php echo $new->getNewsSummary(); ?>

                    </div>
                </div>
            <?php else: ?>
                <div class="col-md-12 col-xs-12">
                    <p>Sorry  No News Found. Please Click <a href="<?php echo e(route('news')); ?>">Here</a> to redirect at news page.</p>
                </div>
            <?php endif; ?>
        </div>

        <div class="col-md-3 col-sm-3 col-xs-12 newsRight">
		
            <h3 class="g-title">Archive</h3>
            <h4 style="color:#848484;font-style:italic;">2018</h4>
            <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <p style="font-style:italic"><strong><?php echo e($new->getUpdatedAt()->format('d F Y')); ?></strong> - <?php echo e($new->getNewsHeading()); ?></p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h2>No Data</h2>
            <?php endif; ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
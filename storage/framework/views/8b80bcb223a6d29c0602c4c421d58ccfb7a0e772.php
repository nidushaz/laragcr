<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-9 col-sm-9 col-xs-12 mobPdnone">
            
			<?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-12 col-sm-12 col-xs-12 news mobPdnone">
                    <div class="col-md-3 col-xs-12">
                        <img src="<?php echo e($new->getThumbnail()); ?>" alt="News Image" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <h3><a href=""><?php echo e($new->getNewsHeading()); ?></a></h3>
                        <p style="font-style: italic">GCR news <?php echo e($new->getUpdatedAt()->format('D d-F-Y')); ?> </p>
                        <p><?php echo \Illuminate\Support\Str::words($new->getNewsSummary(), 10,' .'); ?></p>
                    </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h2>No Data</h2>
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
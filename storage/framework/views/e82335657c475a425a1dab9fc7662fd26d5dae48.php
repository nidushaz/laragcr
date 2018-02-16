<div class="RightSideBr">
    <h1>News</h1>
    <div class="clearfix"></div>

    <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

    <h3><?php echo e($new->news_heading); ?></h3>
    <div><img src="<?php echo e(asset($new->thumbnail)); ?>" class="img-responsive" alt="right-side-img"></div>
        <p><?php echo \Illuminate\Support\Str::words($new->news_summary, 5,' ...'); ?></p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        No News Found
    <?php endif; ?>
    <div class="clearfix"></div>
    <h2>EDMs</h2>
    <div class="clearfix"></div>
    <div><img src="<?php echo e(asset('images/front-images/edm-img.jpg')); ?>" class="img-responsive" alt="edm-img"></div>
</div>
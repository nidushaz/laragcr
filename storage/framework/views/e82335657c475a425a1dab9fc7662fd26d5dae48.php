<div class="RightSideBr">
    <h1>News</h1>
    <div class="clearfix"></div>

    <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

    <h3><a href="<?php echo e(route('news.list',['id'=>$new->id])); ?>"><?php echo e(\Illuminate\Support\Str::words($new->news_heading,7,'')); ?> </a></h3>
    <div><img src="<?php echo e(asset($new->thumbnail)); ?>" class="img-responsive" alt="right-side-img"></div>
     <!--    <p><?php echo \Illuminate\Support\Str::words($new->news_summary, 5,' ...'); ?></p> -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        No News Found
    <?php endif; ?>
    <div class="clearfix"></div>
<div class="event">
    <h1>Events</h1>
    <div class="clearfix"></div>

    <?php $__empty_1 = true; $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

    <h3><a href="<?php echo e(route('news.list',['id'=>$event->id])); ?>"><?php echo e(\Illuminate\Support\Str::words($event->news_heading,7,'')); ?></a></h3>
    <div><img src="<?php echo e(asset($event->thumbnail)); ?>" class="img-responsive" alt="right-side-img"></div>
	</div>
        <!-- <p><?php echo \Illuminate\Support\Str::words($event->news_summary, 5,' ...'); ?></p> -->
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        No Events Found
    <?php endif; ?>
</div>
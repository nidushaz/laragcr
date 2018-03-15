<div class="leftSideBr">
    <h3>INDUSTRY</h3>
	
    <div class="leftSlider ">
	
	<div class="verticalCarousel">
     <ul class="left-scroll">
		<?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li><a href="<?php echo e(route('solutions.catalog')); ?>"><?php echo e($solution->getName()); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
	
	
        </div>
	
    <!--<ul class="verticalCarouselGroup vc_list">
        <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <!--<li><a href="<?php echo e(route('solutions.list',['id' => $solution->getId()])); ?>"><?php echo e($solution->getName()); ?></a></li>
            <li><a href="<?php echo e(route('solutions.catalog')); ?>"><?php echo e($solution->getName()); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>-->
    </div>
    <div class="clearfix"></div>
    <h4>About GCR</h4>
    <div class="clearfix"></div>
    <p><?php echo \Illuminate\Support\Str::words($abouts->getDescription(), 19,' ...'); ?> <a href="<?php echo e(route('about-GCR')); ?>" style="color:maroon">Read more</a></p>
</div>
<div class="leftSideBr">
    <h3>Solutions for</h3>
    <ul>
        <?php $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><a href="<?php echo e(route('solutions.list',['id' => $solution->getId()])); ?>"><?php echo e($solution->getName()); ?></a></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <div class="clearfix"></div>
    <h4>About GCR</h4>
    <div class="clearfix"></div>
    <p><?php echo \Illuminate\Support\Str::words($abouts->getDescription(), 20,' ...'); ?></p>
</div>
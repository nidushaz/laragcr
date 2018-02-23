<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
            <div class="row">
                <div class="flt"><h2>SOLUTION CATALOG</h2></div>
                <div class="flt">
                    <p>Win the shift to the micro-moments<br/>
                        Accelerate digital transition with cloud-based and networking solutions fulfilled to your business needs.</p>
                </div>
            </div>

            <?php $__empty_1 = true; $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <a href ="<?php echo e(route('solutions.list',['id'=>$solution->getId()])); ?>">
            <div class="grid">
			<div class="fortSolut">
                <div class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <figure class="effect-zoe">
                        <img src="<?php echo e(asset($solution->getImage())); ?>" class="img-responsive" alt="solu-img1">
                        <figcaption>
                            <h2><?php echo e($solution->getName()); ?></h2>
                            <p><?php echo \Illuminate\Support\Str::words($solution->getDescription(), 10,' .'); ?></p>
                        </figcaption>
                    </figure>

                </div>
				</div>
            </div>
                </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
            <?php endif; ?>






        </div>
    </div>

        </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
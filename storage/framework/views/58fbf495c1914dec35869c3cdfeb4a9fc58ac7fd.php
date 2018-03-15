<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
			
                <div class="">
                    <div class="flt"><h2>Solution Catalog - <?php echo e($category->getName()); ?></h2><hr/></div>
                    <div class="flt">
                      <h2 class="solutionh2"><?php echo e($category->getName()); ?></h2>
					  <div class="clearfix"></div>
                        <div class="row">
                            <?php $__empty_1 = true; $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <?php if($video->getIsActive()==1): ?>
                                <div class="col-md-3 col-sm-3 col-xs-12">
                                    <iframe width="100%" height="160" src=" <?php echo e($video->getMediaUrl()); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
									<div class="vidTittle"><?php echo e($video->getTitle()); ?></div>
                                </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                No Videos Found
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
</div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
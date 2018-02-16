<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
                <div class="row">
                    <div class="flt"><h2>SOLUTION CATALOG - <?php echo e($solution->getName()); ?></h2></div>
                    <div class="flt">
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
						<div class="bdr-btm">
                            <div class="col-md-2 col-sm-2 col-xs-12"><img src="<?php echo e(asset($product->getProductSolutionId()->getProductProviderId()->getLogo())); ?>" style="width:120px;height:70px;"/></div>
                            <div class="col-md-7 col-sm-8 col-xs-12 solution-left">
                                <h2><?php echo e($product->getProductSolutionId()->getProductName()); ?></h2>
                                <p><?php echo \Illuminate\Support\Str::words($product->getProductSolutionId()->getDescription(), 20,'...'); ?></p>
                                <a href="<?php echo e(route('contact')); ?>" class="btn-blue">Interested</a>
                            </div>
                            <div class="col-md-3 col-sm-2 col-xs-12 text-right">
                                <?php $__empty_2 = true; $__currentLoopData = $product->getProductSolutionId()->getProductImage(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                <img src='<?php echo e($productImage->getMediaUrl()); ?>' style="width:100px;height:70px">
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                    No Media Url
                                <?php endif; ?>
                            </div>
						</div>
						</hr>
                            <div class="clearfix"></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            No Data Found
                        <?php endif; ?>

                    </div>

                </div>








            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
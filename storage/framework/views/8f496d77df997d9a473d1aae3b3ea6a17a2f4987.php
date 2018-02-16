<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
                <div class="row">
                    <div class="flt"><h2>Experience Centre</h2></div>
                    <div class="flt">
                            <div class="row">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <h3 class="solutionh3"><?php echo e($category->getName()); ?></h3>
                                    <div class="col-md-12">
                                        <?php $__empty_1 = true; $__currentLoopData = $category->getExpCategory(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $expVideo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <?php if($loop->iteration>4): ?>
                                                <?php break; ?>
                                            <?php endif; ?>
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <iframe width="100%" height="160" src=" <?php echo e($expVideo->getMediaUrl()); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
												
											<div class="vidTittle"><?php echo e($expVideo->getTitle()); ?></div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            No Video Found In This Category
                                        <?php endif; ?>
                                        <div class="clearfix"></div>
                                        <a href="<?php echo e(route('experience-centre.list',['id'=>$category->getId()])); ?>" class="category-btn">View More</a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                    </div>

                </div>


            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
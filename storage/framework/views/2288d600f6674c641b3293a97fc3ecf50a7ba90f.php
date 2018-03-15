<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
	
	<div class="row padding-bottom-80">
        <div class="col-md-9 col-sm-9 col-xs-12 mobPdnone">
            <?php if(@isset($new)): ?>
                <div class="col-md-12 col-xs-12 newsInner">
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

        <div class="col-md-3 col-sm-3 col-xs-12 newsRight side-bar">
			<div class="heading-side-bar margin-bottom-10">
                <h4>Archive</h4>
              </div>
            <div class="clearfix"></div>
            <?php $__currentLoopData = $sortedData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h4 style="color:#848484;font-style:italic;"><?php echo e($key); ?></h4>
                <ul class="cate">
                    <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li style="font-style:italic"><strong><?php echo e($data['updateAt']); ?></strong> - <a href="<?php echo e(route('news.list',['id'=>$data['id']])); ?>"><?php echo e($data['heading']); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		
	 </div>
	</div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
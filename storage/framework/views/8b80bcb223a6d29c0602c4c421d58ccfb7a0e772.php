<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
	<div class="mrTop">
        <div class="col-md-9 col-sm-9 col-xs-12 mobPdnone">
            
			<?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
            <div class="col-md-12 col-sm-12 col-xs-12 news mobPdnone">
                    <div class="col-md-3 col-xs-12">
                        <img src="<?php echo e(asset($new->getThumbnail())); ?>" alt="<?php echo e($new->getNewsHeading()); ?>" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <h3><a href="<?php echo e(route('news.list',['id'=>$new->getId()])); ?>"><?php echo e($new->getNewsHeading()); ?></a></h3>
                        <p style="font-style: italic"><?php echo e(($new->getSource())?$new->getSource():"GCR"); ?> <?php echo e($new->getUpdatedAt()->format('D d-F-Y')); ?> </p>
                        <p><?php echo \Illuminate\Support\Str::words($new->getNewsSummary(), 40,' .'); ?></p>
                    </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <h2>No Data</h2>
            <?php endif; ?>
		</div>
	
		<div class="col-md-3 col-sm-3 col-xs-12 newsRight">
                <h3 class="g-title">Archive</h3>
                <?php $__currentLoopData = $sortedData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <h4 style="color:#848484;font-style:italic;"><?php echo e($key); ?></h4>
                    <?php $__currentLoopData = $value; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p style="font-style:italic"><strong><?php echo e($data['updateAt']); ?></strong> - <a href="<?php echo e(route('news.list',['id'=>$data['id']])); ?>"><?php echo e($data['heading']); ?></a></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
			</div>
    </div>
	<style>
	
		.newsRight{border: 1px solid #efefef; background: #fbfbfb; margin: 114px 0 0 0;}
	</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
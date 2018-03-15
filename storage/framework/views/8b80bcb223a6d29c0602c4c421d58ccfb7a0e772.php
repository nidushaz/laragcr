<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>
<?php $__env->startSection('content'); ?>
    <div class="container">
	<div class="mrTop">
		<div class="news">
		<div class="col-md-9 col-sm-9 col-xs-12 mobPdnone">
		
			<?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
			<div class="col-md-4 clearfix"> 
              <!-- Article -->
              <article class="news-post">
                <div class="post-img">
				<img src="<?php echo e(asset($new->getThumbnail())); ?>" alt="<?php echo e($new->getNewsHeading()); ?>" class="img-responsive">
                  <div class="date"> <?php echo e(($new->getSource())?$new->getSource():"GCR"); ?> <?php echo e($new->getUpdatedAt()->format('D d-F-Y')); ?> </div>
                </div>
				<div class="atag">
					<a href="<?php echo e(route('news.list',['id'=>$new->getId()])); ?>"><?php echo e($new->getNewsHeading()); ?></a>
				</div>
                <div style="min-height:150px">
                <p><?php echo \Illuminate\Support\Str::words($new->getNewsSummary(), 40,' .'); ?></p>
                </div>
                <!-- Post Info -->
                
              </article>
            </div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
			<?php endif; ?>
		</div>
	</div>
	
	 
	
		 <div class="col-md-3 col-sm-3 col-xs-12 side-bar">
			<div class="heading-side-bar margin-bottom-10">
                <h4>Archives</h4>
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
	<style>
	
		.newsRight{border: 1px solid #efefef; background: #fbfbfb; margin: 114px 0 0 0;}
	</style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<div class="carousel slide">
    <div class="carousel-inner">
        <div class="item active mobSlide" style="background-image: url(<?php echo $__env->yieldContent('banner-image'); ?>); background-size: cover;">
            <div class="">
                <div class="row slide-margin">
                    <div class="col-sm-12">
                        <div class="carousel-content">
                            <h2 class="animation animated-item-1">
                                <?php if(@isset($banner)): ?> <?php echo e($banner->getHeading()); ?> <?php else: ?> Banner Not Set <?php endif; ?>
                            </h2>
                            <!-- <p>(Kindly Changes the background to put this message asthetic way)</p>-->
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="nbs-flexisel-container">
                            <div class="nbs-flexisel-inner">
                                <ul id="flexiselDemo3" class="nbs-flexisel-ul" style="display: block; left: -219.6px;">
                                    <li class="nbs-flexisel-item" style="width:250px;">Efficiency</li>
                                    <li class="nbs-flexisel-item" style="width:250px;">Enhanced Profitability </li>
                                    <li class="nbs-flexisel-item" style="width: 250px;">Business Intelligence </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">

                    <div class="col-sm-12 col-md-12">
                        <?php if(isset($ads)): ?>
                            <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="banrAd">
                                    <img src="<?php echo e(asset($ad->getImage())); ?>" class="img-responsive">
									
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!--/.item-->
    </div>
    <!--/.carousel-inner-->
</div>

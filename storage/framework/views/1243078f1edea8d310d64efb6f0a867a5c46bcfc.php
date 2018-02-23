<?php $__env->startSection('banner-image',asset($banner->getImage())); ?>

    <?php $__env->startSection('content'); ?>

        <section class="secMrgTop">
            <div class="feature">
                <div class="container">
                    <div class="row">
                        <div class="flt"><h2>GCR Eco System</h2></div>
                        <div class="flt">
                         <p>GCR is Global Channel Resources, bridging the gaps between solution providers and global channel partners.,<br/>
                    We collaborate with worldwide cloud-based/networking solution providers to enable channel partners providing IoT solutions and cloud services.</p>
                        </div>
                    </div>
				<div class="grid">
                    <div class="text-center">
                    <div style=" float: left; margin-right: 10px;"> 
						<img src="<?php echo e(asset('images/front-images/vart-text.png')); ?>" class="img-responsive" alt="socail-vsit">
					</div>
                        <?php $__empty_1 = true; $__currentLoopData = $solutions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solution): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        
                        <div class="fortSolut">
                            <div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<figure class="effect-zoe toggler">
                                <img src="<?php echo e(asset($solution->getImage())); ?>" class="img-responsive" alt="solu-img1">
								<figcaption>
									<h2><?php echo e($solution->getName()); ?></h2>
									<p><?php echo \Illuminate\Support\Str::words($solution->getDescription(),10,'...'); ?></p>
									</figcaption>	
							</figure>
                            </div>
                        </div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
							
                    </div>
					 <div class="clearfix"></div>
				 <div class="og-expander">
					<div class="row">
					<span class="closebtn">X</span>
						<div class="col-md-12 col-sm-12 col-xs-12 ">
						
						<p><a href="#">Content</a></p>
						</div>
					</div>
				 </div>
				</div>
                </div>
            </div>
        </section>



        <div class="about">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

<div id="example">
  <carousel-3d :controls-visible="true" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'" 
               controls-width="30" :controls-height="60" :clickable="false">
			   <?php $__empty_1 = true; $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<slide :index="<?php echo e($key); ?>">
				  <figure>
					<iframe width="100%" height="270" src="  <?php echo $video->getMediaUrl(); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				  </figure>
			   </slide>
			   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>-
			   <?php endif; ?>
  </carousel-3d>

               
	</div>			
						
					
					
					
				
<!------ Video Code---------->


                </div>

            </div>
        </div>

        <div class="lates">
            <div class="container">

                <div class="col-md-1 col-xs-12"></div>
                <div class="col-md-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h1>Customer Testimonial </h1>
                    <div class="clearfix"></div>
                    <div id="myCarousel" class="carousel slide " data-ride="carousel">

                        <div class="carousel-inner">
                            <?php $__empty_1 = true; $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <div class="item active testi">
                                <div>
                                    <p><?php echo $testimonial->getTestimonial(); ?></p>
                                    <div class="arrow-down"></div>
                                </div>
                                <div class="profile-circle">
                                    <img src="<?php echo e(asset($testimonial->getImage())); ?>" alt="client-img">
                                    <h3><?php echo e($testimonial->getName()); ?></h3>
                                    <p><?php echo e($testimonial->getDesignation()); ?></p>
                                </div>

                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                            <?php endif; ?>
                        </div>
                        <!--<div class="carousel-inner">
                           <div class="test"></div>
                            <div class="item active">

                                <img src="http://placehold.it/760x400/cccccc/ffffff">
                                <div class="carousel-caption">
                                <h4><a href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a></h4>


                                </div>
                            </div>

                            <div class="item">
                                <img src="http://placehold.it/760x400/999999/cccccc">
                                <div class="carousel-caption">
                                <h4><a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>

                                </div>
                            </div>

                            <div class="item">

                                <img src="http://placehold.it/760x400/dddddd/333333">
                                <div class="carousel-caption">
                                <h4><a href="#">tempor invidunt ut labore et dolore</a></h4>

                                </div>

                            </div>

                           </div>-->

                        <!--<ul class="list-group col-md-3 carousel-indicators">

                             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                             <li data-target="#myCarousel" data-slide-to="1" ></li>
                             <li data-target="#myCarousel" data-slide-to="2" ></li>

                     </ul>-->
                    </div>
                </div>
                <div class="col-md-1 col-xs-12"></div>
                <div class="col-md-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <h1>Let’s Get Social</h1>
                    <div class="clearfix"></div>
                    <img src="<?php echo e(asset('images/front-images/socail-vsit.jpg')); ?>" class="img-responsive" alt="socail-vsit"> </div>
            </div>
        </div>

        <section id="partner">
            <div class="container">
                <div class="wow fadeInDown">
                    <h2>Our Platform Ecosystem Partners</h2>
                    <p>(Explore the information below to learn more)</p>
                </div>

             <div class="">
			 <div class="center slider">
			 <?php $__empty_1 = true; $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<div>
					
					<img class="img-responsive wow"  src="<?php echo e(asset($partner->getLogo())); ?>">
					
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
			 </div>
			 
                    <!--<div class="nbs-flexisel-container-one">
                            <div class="nbs-flexisel-inner-one" style="width:100%;">
                                <ul id="flexiselDemo7" class="nbs-flexisel-ul" style="display: block; left: -219.6px;">
                                    <?php $__empty_1 = true; $__currentLoopData = $partners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <li><a href="#"><img class="img-responsive wow"  src="<?php echo e(asset($partner->getLogo())); ?>"></a></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                                </ul>
                            </div>

                        </div>-->
                </div>
                
                
                
                
                
            </div>
            
            
            
        </section>
        
        
       
  
</div>
        <!--/#partner-->
        <?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.frontLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
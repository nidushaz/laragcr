
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navigation">
            <div class="container">
                <div class="col-md-2 col-sm-2 mobPdn">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <a href="<?php echo e(route('home')); ?>">
                                <img src="<?php echo e(asset('images/front-images/logo.png')); ?>" alt="logo"></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12 mobPdn">
				
				<div class="collapse navbar-collapse cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="main-nav">
                        <ul class="nav navbar-nav pull-left">

                            <!-- Mobile Menu Title -->
                                                        <!-- Simple Menu Item -->
                            <li class="dropdown simple-menu">
                                <a href="<?php echo e(route('solutions')); ?>" class="dropdown-toggle">Solutions</a>
                            </li>
							<!-- Simple Menu Item -->
                            <li class="dropdown simple-menu">
                                <a href="<?php echo e(route('solutions')); ?>" class="dropdown-toggle" >e-Catalog</a>
                            </li>
							<li class="dropdown simple-menu">
                                <a href="<?php echo e(route('experience-centre')); ?>" class="dropdown-toggle">Experience Centre</a>
                            </li>
							<li class="dropdown simple-menu">
                                <a href="<?php echo e(route('contact')); ?>" class="dropdown-toggle">Support</a>
                            </li>
							<li class="dropdown simple-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Partners <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
                                    <li><a href="<?php echo e(route('channel-partners')); ?>">Partners 1</a></li>
                                    <li><a href="<?php echo e(route('channel-partners')); ?>">Partners 2</a></li>
                                  
                                </ul>
                            </li>
							<li class="dropdown simple-menu">
                                <a href="<?php echo e(route('about-GCR')); ?>" class="dropdown-toggle" role="button">About GCR</a>
                            </li>

                            <!-- Simple Menu Item -->
                            
                            

                        </ul>
                    </div>
				
				
				
				
				
				
				
				
				
                    <!--<div class="navbar-collapse collapse">
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="<?php echo e(route('solutions')); ?>" class="active">Solutions</a></li>
                                <li role="presentation"><a href="<?php echo e(route('solutions')); ?>">e-Catalog</a></li>
                                <li role="presentation"><a href="<?php echo e(route('experience-centre')); ?>">Experience Centre</a></li>
                                <li role="presentation"><a href="<?php echo e(route('contact')); ?>">Support</a></li>
                                <li role="presentation" class="dropdown-submenu"><a href="<?php echo e(route('channel-partners')); ?>"> Partners</a></li>
                                <li role="presentation"><a href="<?php echo e(route('news')); ?>"> News</a></li>
                                <li role="presentation"><a href="<?php echo e(route('about-GCR')); ?>">About GCR</a></li>
                            </ul>
                        </div>
                    </div>-->
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="search-icon">

                        <div id="show"><input type="text" placeholder="Search.."></div>
                    </div>
                    <div class="social-icon">
                        <ul class="social-network">
                            <li><a href="#"> <img src="<?php echo e(asset('images/front-images/search-icon.jpg')); ?>" class="secon" width="21" height="19" alt="search-icon"></a></li>
                            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <?php echo $__env->make('alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
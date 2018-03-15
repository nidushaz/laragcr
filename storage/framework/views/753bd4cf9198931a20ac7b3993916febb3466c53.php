<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
                <div class="row contInfo contact-1">
                    <div class="flt">
						<h2>Contact <span>Form</span></h2>
					</div>
                    <div class="flt">
                        <div class="row">
                            <div class="col-md-8">
                            <form action="<?php echo e(route('contact.submit')); ?>" method="post">
                                <fieldset class="alertDiv"></fieldset>

                                    <div class="form-group">
                                        <label>First Name</label> <span class="red">* <small></small></span>
                                        <input class="form-control required" placeholder="First Name" type="text" name="firstName">
                                        <?php echo e(csrf_field()); ?>

                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label> <span class="red">* <small></small></span>
                                        <input class="form-control required"  placeholder="Last Name" type="text" name="lastName">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label><span class="red">* <small></small></span>
                                        <input class="form-control required"  placeholder="Email" type="email" name="email">
                                    </div>
                                    <!--<div class="form-group">
                                        <label>Industry</label> <span class="red">* <small></small></span>
                                        <select class="form-control required"  name="industry">
                                            <option value="">Choose Industry</option>
                                            <option value="Industry">industry name</option>
                                        </select>
                                    </div>-->

                                    <div class="form-group">
                                        <label>Country</label> <span class="red">* <small></small></span>
                                        <select class="form-control required"  name="country">
                                            <option value="">Choose Country</option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($country->getName()); ?>"><?php echo e($country->getName()); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <!--<div class="form-group">
                                        <label>Topic</label> <span class="red">* <small></small></span>
                                        <select class="form-control required"  name="topic">
                                            <option value="I want to be a certified partner" selected="selected">I want to be a certified partner</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>-->

                                    <div class="form-group">
                                        <label>Company Name</label><span class="red">* <small></small></span>
                                        <input class="form-control required"  placeholder="Company Name" type="text" name="company">
                                    </div>

                                   <!-- <div class="form-group">
                                        <label>Company Size</label> <span class="red">* <small></small></span>
                                        <select class="form-control required"  name="company-size">
                                            <option value="0-50" selected="selected">0-50</option>
                                            <option value="50-250">50-250</option>
                                            <option value="250-1000">250-1000</option>
                                            <option value="more than 1000">More than 1000</option>
                                        </select>
                                    </div>-->
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input class="form-control"  placeholder="www.yourwebsite.com" type="text" name="website">
                                    </div>
                                    <div class="form-group">
                                        <label>Office Number</label> <span class="red">* <small></small></span>
                                        <input class="form-control required"  placeholder="Office Phone Number" type="text" name="number">
                                    </div>
                                    <div class="form-group-text">
									
                                        <label>Address</label> <span class="red">* <small></small></span>
                                        <textarea class="form-control required"  placeholder="Address" name="address"></textarea>
                                    </div>
									<div class="clearfix"></div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info" value="Submit"/>
                                    </div>


                            </form>
                            </div>
							<div class="col-md-4 col-sm-4 col-xs-12">
							<div class="contact-item">
                                <span class="icon">
									<i class="fa fa-thumb-tack" aria-hidden="true"></i>
								  </span>
                                <?php $__empty_1 = true; $__currentLoopData = $offices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $office): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                  <div class="content">

                                      <h5><?php echo e($office->getOfficeName()); ?> </h5>
                                      <p>
                                    Address : <?php echo e($office->getAddress1()); ?> <?php echo e($office->getCity()); ?>,<?php echo e($office->getState()); ?><br/>
                                    Pincode : <?php echo e($office->getPincode()); ?><br/>
                                    Phone : +<?php echo e($office->getContactNo()); ?><br/>
                                    E-Mail : <?php echo e($office->getEmail()); ?>

                                </p>
                                  </div>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    No Office Found
                                <?php endif; ?>


                              </div>
							</div>
							
							
                            <!--<div class="col-md-4">
                                <?php $__empty_1 = true; $__currentLoopData = $offices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $office): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                <h4><?php echo e($office->getOfficeName()); ?></h4>
                                <p>
                                    Address : <?php echo e($office->getAddress1()); ?> <?php echo e($office->getCity()); ?>,<?php echo e($office->getState()); ?><br/>
                                    Pincode : <?php echo e($office->getPincode()); ?><br/>
                                    Phone : +<?php echo e($office->getContactNo()); ?><br/>
                                    <?php echo e($office->getEmail()); ?>- E-Mail
                                </p>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </div>-->
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front-end.layouts.contactLayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
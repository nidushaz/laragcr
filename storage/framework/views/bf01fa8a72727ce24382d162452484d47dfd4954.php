<?php $__env->startSection('title'); ?>
    <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> | Office
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> Office </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('office.index')); ?>"><i class="fa fa-reply"></i> Office List</a>
                        </div>
                    </div>
                    <hr/>
                    <form class="form-horizontal" role="form" id="addForm" action="<?php if(@isset($office)): ?> <?php echo e(route('office.update',['office' => $office->getId()] )); ?> <?php else: ?><?php echo e(route('office.store')); ?> <?php endif; ?>" method="POST">


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Office Name</label>
                                        <?php echo e(csrf_field()); ?>

                                        <?php if(isset($office)): ?>
                                            <input type="hidden" name="id" value="<?php echo e($office->getId()); ?>">
                                            <input type="hidden" name="_method" value="PUT">
                                        <?php endif; ?>
                                        <input class="form-control" required="required" placeholder="Office Name" type="text" name="office_name" value="<?php if(isset($office)): ?><?php echo e($office->getOfficeName()); ?><?php endif; ?>"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Head Office</label>
                                        <input class="form-control" required="required" placeholder="HeadOffice City Name" type="text" name="head_office" value="<?php if(isset($office)): ?><?php echo e($office->getHeadOffice()); ?><?php endif; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Contact Person</label>
                                        <input class="form-control" required="required" placeholder="Contact Person Name" type="text" name="contact_person" value="<?php if(isset($office)): ?><?php echo e($office->getContactPerson()); ?><?php endif; ?>"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input class="form-control" required="required" placeholder="Contact Number" type="text" name="contact_number" value="<?php if(isset($office)): ?><?php echo e($office->getContactNo()); ?><?php endif; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>

                                        <select class="form-control select2" required="required" id="cat_id" name="country">
                                            <option value="">Choose Country</option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->getName()); ?>" <?php if(isset($office)): ?> <?php echo e($country->getName() == $office->getCountry() ? "selected=selected" : ""); ?> <?php endif; ?> ><?php echo e($country->getName()); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" required="required" placeholder="Email" type="text" name="email" value="<?php if(isset($office)): ?><?php echo e($office->getEmail()); ?><?php endif; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input class="form-control" required="required" placeholder="City" type="text" name="city" value="<?php if(isset($office)): ?><?php echo e($office->getCity()); ?><?php endif; ?>"/>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input class="form-control" required="required" placeholder="State" type="text" name="state" value="<?php if(isset($office)): ?><?php echo e($office->getState()); ?><?php endif; ?>"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Pincode</label>
                                        <input class="form-control" required="required" placeholder="Pincode" type="text" name="pincode" value="<?php if(isset($office)): ?><?php echo e($office->getPincode()); ?><?php endif; ?>"/>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Primary Address</label>
                                        <textarea rows="5"  id="address1" required="required" class="form-control" placeholder="Primary Address" name="address1"><?php if(isset($office)): ?> <?php echo e($office->getAddress1()); ?> <?php endif; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Secondary Address</label>
                                        <textarea rows="5"  id="address2" required="required" class="form-control" placeholder="Secondary Address" name="address2"><?php if(isset($office)): ?> <?php echo e($office->getAddress2()); ?> <?php endif; ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                        <?php if(isset($office)): ?>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" <?php echo e($office->getIsActive()?'checked':''); ?>>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" <?php echo e($office->getIsActive()?'':'checked'); ?>>
                                            <label for="active_0">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>




                        <div class="row">
                            <button type="submit" class="btn btn-default waves-effect waves-light btn-md">
                                Submit
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.adminLayouts2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
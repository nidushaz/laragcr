<?php $__env->startSection('title'); ?>
    <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> | Solution Provider
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> Solution Provider </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('providers.index')); ?>"><i class="fa fa-reply"></i> Solution Provider List</a>
                        </div>
                    </div>
                    <hr/>
                    <form class="form-horizontal" role="form" id="addForm" action="<?php if(@isset($provider)): ?> <?php echo e(route('providers.update',['providers' => $provider->getId()] )); ?> <?php else: ?><?php echo e(route('providers.store')); ?> <?php endif; ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> First Name</label>
                                    <input class="form-control" required="required" placeholder="Solution Provider First Name" type="text" name="first_name"  value="<?php if(isset($provider)): ?><?php echo e($provider->getFirstName()); ?> <?php endif; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" required="required" placeholder="Solution Provider Last Name" type="text" name="last_name"  value="<?php if(isset($provider)): ?><?php echo e($provider->getLastName()); ?> <?php endif; ?>">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Company Name</label>
                                    <input class="form-control" required="required" placeholder="Company Name" type="text" name="company"  value="<?php if(isset($provider)): ?><?php echo e($provider->getCompanyName()); ?> <?php endif; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Website</label>
                                    <input class="form-control"  placeholder="www.websitename.com" type="text" name="website"  value="<?php if(isset($provider)): ?><?php echo e($provider->getCompanySite()); ?> <?php endif; ?>">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input class="form-control"  placeholder="Contact Number" type="text" name="contact"  value="<?php if(isset($provider)): ?><?php echo e($provider->getCompanyContactNo()); ?> <?php endif; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        <?php echo e(csrf_field()); ?>

                                        <?php if(isset($provider)): ?>
                                            <input type="hidden" name="id" value="<?php echo e($provider->getId()); ?>">
                                            <input type="hidden" name="_method" value="PUT">
                                        <?php endif; ?>
                                        <input class="filestyle" id="banner-img" data-size="sm" placeholder="Browse Logo" type="file" name="image"/>
                                    </div>
                                </div>
                                <div class="col-md-5" id="img-preview">
                                    <?php if(isset($provider)): ?>
                                        <img class="img-thumbnail thumb-lg" src="<?php echo e(asset($provider->getLogo())); ?>" alt="Logo">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="form-control select2" required="required" id="country" name="country">
                                        <option value="">Choose Country</option>
                                        <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($country->getId()); ?>" <?php if(isset($provider)): ?> <?php echo e($country->getId() == $provider->getCountry() ? "selected=selected" : ""); ?> <?php endif; ?> ><?php echo e($country->getName()); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" required="required" name="address" placeholder="Address"><?php if(isset($provider)): ?><?php echo e($provider->getAddress()); ?> <?php endif; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                        <?php if(isset($provider)): ?>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" <?php echo e($provider->getIsActive()?'checked':''); ?>>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" <?php echo e($provider->getIsActive()?'':'checked'); ?>>
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
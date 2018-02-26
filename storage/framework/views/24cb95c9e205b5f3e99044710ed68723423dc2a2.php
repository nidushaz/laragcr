<?php $__env->startSection('title'); ?>
    <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> | User
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> Back</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('users.index')); ?>"><i class="fa fa-reply"></i> Users List</a>
                        </div>
                    </div>
                    <hr/>
                    <form class="form-horizontal" role="form" id="addForm" action="<?php if(@isset($user)): ?> <?php echo e(route('users.update',['users' => $user->getId()] )); ?> <?php else: ?><?php echo e(route('users.store')); ?> <?php endif; ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">First Name</label>
                                    <input class="form-control" required="required" placeholder="First Name" type="text" name="firstName"  value="<?php if(isset($user)): ?><?php echo e($user->getFirstName()); ?> <?php endif; ?>">
                                    <?php echo e(csrf_field()); ?>

                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Last Name</label>
                                    <input class="form-control" required="required" placeholder="Last Name" type="text" name="lastName"  value="<?php if(isset($user)): ?><?php echo e($user->getLastName()); ?> <?php endif; ?>">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Profile Pic</label>
                                    <input class="filestyle" type="file" name="profilePic">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                   <img src="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Contact</label>
                                    <input class="form-control" required="required" placeholder="Contact Number" type="text" name="contactNumber"  value="<?php if(isset($user)): ?><?php echo e($user->getContactNumber()); ?> <?php endif; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input class="form-control" required="required" placeholder="Email" type="text" name="email"  value="<?php if(isset($user)): ?><?php echo e($user->getEmail()); ?> <?php endif; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Password</label>
                                    <input class="form-control" required="required" placeholder="Password" type="password" name="password">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Role</label>
                                    <select class="form-control select2" name="role">
                                        <option value="">Choose Role</option>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($role->getId()); ?>"><?php echo e($role->getRole()); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Type</label>
                                    <div class="col-md-12">
                                        <div class="checkbox checkbox-success checkbox-inline">
                                            <input class="form-control" type="checkbox" name="isAdmin" id="isAdmin">
                                            <label for="isAdmin"> Is Admin </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear-fix"></div>

                        <?php if(isset($user)): ?>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" <?php echo e($user->getIsActive()?'checked':''); ?>>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" <?php echo e($user->getIsActive()?'':'checked'); ?>>
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
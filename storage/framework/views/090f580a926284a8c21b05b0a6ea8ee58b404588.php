<?php $__env->startSection('title'); ?>
    <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> | Roles
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">
        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> Roles</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('roles.index')); ?>"><i class="fa fa-reply"></i> Back</a>
                        </div>
                    </div>
                    <hr/>
                    <form action="<?php if(@isset($role)): ?><?php echo e(route('roles.update',['roles'=>$role->getId()])); ?><?php else: ?><?php echo e(route('roles.store')); ?><?php endif; ?>" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Role : </label>
                                    <input class="form-control" required="required" placeholder="Role" type="text" name="role"  value="<?php if(isset($role)): ?><?php echo e($role->getRole()); ?> <?php endif; ?>">
                                    <?php echo e(csrf_field()); ?>

                                    <?php if(isset($role)): ?>
                                        <input type="hidden" name="_method" value="PUT">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Permission : </label>
                                    <ul class="file-tree">
                                        <?php $__currentLoopData = $routers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $router): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li><a href="#"><?php echo e(ucfirst($key)); ?></a>
                                            <?php $__currentLoopData = $router; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $route): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <ul>
                                                    <li>
                                                        <input type="checkbox" name="permission[]" value="<?php echo e($route['pageUri']); ?>" <?php if(isset($role)): ?>  <?php if(isset($role)): ?>
                                                        <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <?php if($route['pageUri']==$permission): ?> checked <?php else: ?>  <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                <?php endif; ?> <?php endif; ?>><?php if($route['pageMethod']=='destroy'): ?>  Delete <?php else: ?>  <?php echo e(ucfirst($route['pageMethod'])); ?> <?php endif; ?></li>
                                                    
                                                    
                                                </ul>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </li>
                                     </ul>
                                </div>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                        <?php if(isset($role)): ?>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" <?php echo e($role->getIsActive()?'checked':''); ?>>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" <?php echo e($role->getIsActive()?'':'checked'); ?>>
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
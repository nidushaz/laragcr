<?php $__env->startSection('title'); ?>
    <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> | Ads
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> Ads</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('ads.index')); ?>"><i class="fa fa-reply"></i> Ads List</a>
                        </div>
                    </div>
                    <hr/>
                    <form class="form-horizontal" role="form" id="addForm" action="<?php if(@isset($ad)): ?> <?php echo e(route('ads.update',['ads' => $ad->getId()] )); ?> <?php else: ?><?php echo e(route('ads.store')); ?> <?php endif; ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input class="form-control" required="required" placeholder="Title" type="text" name="title"  value="<?php if(isset($ad)): ?><?php echo e($ad->getTitle()); ?> <?php endif; ?>">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Image</label>
                                        <?php echo e(csrf_field()); ?>

                                        <?php if(isset($ad)): ?>
                                            <input type="hidden" name="id" value="<?php echo e($ad->getId()); ?>">
                                            <input type="hidden" name="_method" value="PUT">
                                        <?php endif; ?>
                                        <input class="filestyle" id="banner-img" data-size="sm" placeholder="Browse Image" type="file" name="image"/>
                                    </div>
                                </div>
                                <div class="col-md-5" id="img-preview">
                                    <?php if(isset($ad)): ?>
                                        <img class="img-thumbnail thumb-lg" src="<?php echo e(asset($ad->getImage())); ?>" alt="">
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Detail</label>
                                    <textarea rows="5"  id="detail" required="required" class="form-control summernote" placeholder="Detail" name="addDetail"><?php if(isset($ad)): ?> <?php echo e($ad->getAddDetail()); ?> <?php endif; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                        <?php if(isset($ad)): ?>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" <?php echo e($ad->getIsActive()?'checked':''); ?>>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" <?php echo e($ad->getIsActive()?'':'checked'); ?>>
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
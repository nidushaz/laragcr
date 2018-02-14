<?php $__env->startSection('title','Banners'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Page Setting</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#page" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Content</span>
                    </a>
                </li>
                <li class="">
                    <a href="#banner" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                        <span class="hidden-xs">Banner</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane active" id="page">
                    <form name="pageForm" class="validateForm" action="<?php echo e(route('page.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea rows="5" class="form-control summernote" placeholder="Page Content Here.." name="description"><?php if(isset($pageContentData)): ?> <?php echo e($pageContentData->getDescription()); ?> <?php endif; ?></textarea>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="tab-pane" id="banner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banner Name</label>
                                <input class="required form-control"  parsley-trigger="change" required="required" placeholder="Banner Name" type="text" name="name" value="<?php if(isset($pageBannerData)): ?><?php echo e($pageBannerData->getName()); ?> <?php endif; ?>">
                                <input type="hidden" name="page_id" value="<?php echo e($pageid); ?>">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banner Heading</label>
                                <input class="required form-control"  required="required" placeholder="Banner Heading" type="text" name="heading" value="<?php if(isset($pageBannerData)): ?><?php echo e($pageBannerData->getName()); ?> <?php endif; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Anchor Link</label>
                                <input class="required form-control" required="required" placeholder="Anchor Link" type="url" name="anchor_url" value="<?php if(isset($pageBannerData)): ?> <?php echo e($pageBannerData->getAnchorUrl()); ?> <?php endif; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Anchor Text</label>
                                <input class="required form-control" required="required" placeholder="Anchor Text" type="text" name="anchor_text" value="<?php if(isset($pageBannerData)): ?> <?php echo e($pageBannerData->getAnchorText()); ?> <?php endif; ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control select2" required="required" id="country_id" name="country_id">
                                    <option value="">Choose Country</option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->getId()); ?>" <?php if(isset($pageBannerData)): ?> <?php echo e($pageBannerData->getBannerCountryId()->getId() == $country->getId() ? "selected=selected" : ""); ?> <?php endif; ?> ><?php echo e($country->getName()); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <label>Banner Image</label>
                                    <input class="filestyle" id="banner-img" data-size="sm" placeholder="Browse Banner Image" type="file" name="image" value="<?php if(isset($pageBannerData)): ?> <?php echo e($pageBannerData->getImage()); ?> <?php endif; ?>">
                                </div>
                            </div>
                            <div class="col-md-5" id="img-preview">
                                <?php if(isset($pageBannerData)): ?>
                                    <img class="img-thumbnail thumb-lg" src="<?php echo e(asset($pageBannerData->getImage())); ?>" alt="">
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Banner Description</label>
                                <textarea rows="5"  id="banner_description" required="required" class="form-control summernote" placeholder="Banner Description" name="banner_description"><?php if(isset($pageBannerData)): ?> <?php echo e($pageBannerData->getBannerDescription()); ?> <?php endif; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
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

    <!-- end row -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.adminLayouts2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
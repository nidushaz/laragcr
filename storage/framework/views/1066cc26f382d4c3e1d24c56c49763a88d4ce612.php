<?php $__env->startSection('title',''); ?>

<?php $__env->startSection('content'); ?>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <div class = "col-md-6">
                                <h4 class="title">Page Settings</h4>
                                <p class="category">Home Page</p>
                            </div>
                            <div class = "col-md-6">
                                <!--<button type="submit" class="btn btn-info btn-fill pull-right">Add Banner</button>-->
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="content">
                            <div>

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#content" aria-controls="home" role="tab" data-toggle="tab">Content</a></li>
                                    <li role="presentation"><a href="#banner" aria-controls="profile" role="tab" data-toggle="tab">Banners</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <form name="pageForm" action="<?php echo e(route('page.store')); ?>" method="POST" enctype="multipart/form-data">
                                        <?php echo e(csrf_field()); ?>

                                        <div role="tabpanel" class="tab-pane fade in active active" id="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Content</label>
                                                    <textarea rows="5" class="form-control" placeholder="Page Content Here.." name="description"><?php if(isset($pageContentData)): ?> <?php echo e($pageContentData->getDescription()); ?> <?php endif; ?></textarea>
                                                </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="banner">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Banner Name</label>
                                                        <input class="form-control" placeholder="Banner Name" type="text" name="name" value="<?php if(isset($pageBannerData)): ?> <?php echo e($pageBannerData->getName()); ?> <?php endif; ?>">
                                                        <input type="text" name="page_id" value="<?php echo e($pageid); ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Banner Heading</label>
                                                        <input class="form-control" placeholder="Banner Heading" type="text" name="heading" value="<?php if(isset($pageBannerData)): ?> <?php echo e($pageBannerData->getHeading()); ?> <?php endif; ?>">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Anchor Link</label>
                                                        <input class="form-control" placeholder="Anchor Link" type="url" name="anchor_url" value="<?php if(isset($pageBannerData)): ?> <?php echo e($pageBannerData->getAnchorUrl()); ?> <?php endif; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label>Anchor Text</label>
                                                            <input class="form-control" placeholder="Anchor Text" type="text" name="anchor_text" value="<?php if(isset($pageBannerData)): ?> <?php echo e($pageBannerData->getAnchorText()); ?> <?php endif; ?>">
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select class="form-control" id="country_id" name="country_id">
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
                                                            <input class="form-control" placeholder="Browse Image" type="file" name="image" value="<?php if(isset($pageBannerData)): ?> <?php echo e($pageBannerData->getImage()); ?> <?php endif; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <?php if(isset($pageBannerData)): ?>
                                                            <img style="width:150px" src="<?php echo e(asset($pageBannerData->getImage())); ?>" alt="">
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Banner Description</label>
                                                    <textarea rows="5" id="banner_description" class="form-control" placeholder="Banner Description" name="banner_description"><?php if(isset($pageBannerData)): ?> <?php echo e($pageBannerData->getBannerDescription()); ?> <?php endif; ?></textarea>
                                                </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layouts.adminLayouts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
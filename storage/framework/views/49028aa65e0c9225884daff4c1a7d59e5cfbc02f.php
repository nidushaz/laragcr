<?php $__env->startSection('title'); ?>
<?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> | Product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title"> <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> Product</h4>
            <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-2">
                        <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('solutions.index')); ?>"><i class="fa fa-reply"></i> Products List</a>
                    </div>
                </div>
                <hr/>
                <form class="form-horizontal" role="form" id="addForm" action="<?php if(@isset($product)): ?> <?php echo e(route('solutions.update',['solutions' => $product->getId()] )); ?> <?php else: ?><?php echo e(route('solutions.store')); ?> <?php endif; ?>" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input class="form-control" required="required" placeholder="Product Name" type="text" name="productName"  value="<?php if(isset($product)): ?><?php echo e($product->getProductName()); ?> <?php endif; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input class="form-control" required="required" placeholder="Meta Title" type="text" name="metaTitle"  value="<?php if(isset($product)): ?><?php echo e($product->getMetaTitle()); ?> <?php endif; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Keywords</label>
                                <input class="form-control" required="required" placeholder="Meta Keywords" type="text" name="metaKeywords"  value="<?php if(isset($product)): ?><?php echo e($product->getMetaKeywords()); ?> <?php endif; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea rows="5" class="form-control" required="required" placeholder="Meta Description" name="metaDescription" id="metaDescription"><?php if(isset($product)): ?><?php echo e($product->getMetaDescription()); ?> <?php endif; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control select2" required="required" id="country" name="country">
                                    <option value="">Choose Country</option>
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($country->getId()); ?>" <?php if(isset($product)): ?> <?php echo e($country->getId() == $product->getProductCountryId()->getId() ? "selected=selected" : ""); ?> <?php endif; ?> ><?php echo e($country->getName()); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Solution Type</label>
                                <select class="form-control select2" required="required" id="productSolutionTypeId" name="productSolutionTypeId[]" multiple="multiple">
                                    <option value="">Choose Solution Type</option>
                                    <?php $__currentLoopData = $solutionTypes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solutionType): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($solutionType->getId()); ?>" <?php if(isset($product)): ?> <?php echo e(in_array($solutionType->getId(),$selectedSolutions)  ? "selected=selected" : ""); ?> <?php endif; ?>><?php echo e($solutionType->getName()); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="5"  id="description" required="required" class="form-control summernote" placeholder="Description" name="description"><?php if(isset($product)): ?> <?php echo e($product->getDescription()); ?> <?php endif; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Image</label>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" id="addBtn"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        <?php if(isset($product)): ?>
                            <div id="imageSection">
                            <?php $__currentLoopData = $product->getProductImage(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $productImage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <span class="close removeBtn">X</span>
                                        <img class="thumb-lg imgPreview" src="<?php echo e($productImage->getMediaUrl()); ?>"/>
                                        <input type="hidden" class="imageUrl" value="<?php echo e($productImage->getMediaUrl()); ?>" name="productImageUrl[]"/>
                                        <input class="filestyle actimage" data-size="sm" placeholder="Browse Image" type="file" name="productImage[]"/>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        <?php else: ?>
                        <div id="imageSection">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <img class="thumb-lg imgPreview" />
                                    <input class="filestyle actimage" data-size="sm" placeholder="Browse Image" type="file" name="productImage[]"/>
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="clear-fix"></div>
                    <?php if(isset($product)): ?>
                    <div class="row">
                        <div class="form-group">
                            <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                            <div class="col-md-6">
                                <div class="radio radio-success radio-inline">
                                    <input type="radio" id="active_1" name="active" value="1" <?php echo e($product->getIsActive()?'checked':''); ?>>
                                    <label for="active_1">Active</label>
                                </div>
                                <div class="radio radio-danger radio-inline">
                                    <input type="radio" id="active_0" name="active" value="0" <?php echo e($product->getIsActive()?'':'checked'); ?>>
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
                    <?php echo e(csrf_field()); ?>

                    <?php if(isset($product)): ?>
                        <input type="hidden" name="id" value="<?php echo e($product->getId()); ?>">
                        <input type="hidden" name="_method" value="PUT">
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.adminLayouts2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
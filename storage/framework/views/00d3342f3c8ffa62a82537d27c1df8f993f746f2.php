<?php $__env->startSection('title'); ?>
    <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> | News
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> <?php echo e(ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1))); ?> News </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('news.index')); ?>"><i class="fa fa-reply"></i> News List</a>
                        </div>
                    </div>
                    <hr/>
                    <form class="form-horizontal" role="form" id="addForm" action="<?php if(@isset($news)): ?> <?php echo e(route('news.update',['news' => $news->getId()] )); ?> <?php else: ?><?php echo e(route('news.store')); ?> <?php endif; ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <?php echo e(csrf_field()); ?>

                                        <?php if(isset($news)): ?>
                                            <input type="hidden" name="id" value="<?php echo e($news->getId()); ?>">
                                            <input type="hidden" name="_method" value="PUT">
                                        <?php endif; ?>
                                        <select class="form-control select2" required="required" id="cat_id" name="country">
                                            <option value="">Choose Country</option>
                                            <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($country->getId()); ?>" <?php if(isset($news)): ?> <?php echo e($country->getId() == $news->getNewsCountryId()->getId() ? "selected=selected" : ""); ?> <?php endif; ?> ><?php echo e($country->getName()); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Thumbnail</label>
                                            <?php echo e(csrf_field()); ?>

                                            <?php if(isset($news)): ?>
                                                <input type="hidden" name="id" value="<?php echo e($news->getId()); ?>">
                                                <input type="hidden" name="_method" value="PUT">
                                            <?php endif; ?>
                                            <input class="filestyle" data-size="sm" placeholder="Browse Image" type="file" name="thumbimage"/>
                                        </div>
                                    </div>
                                    <div class="col-md-5" id="img-preview">
                                        <?php if(isset($news)): ?>
                                            <img class="img-thumbnail thumb-lg" src="<?php echo e(asset($news->getThumbnail())); ?>" alt="">
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>News/Events Heading</label>
                                    <input class="form-control" required="required" placeholder="News heading" type="text" name="title"  value="<?php if(isset($news)): ?><?php echo e($news->getNewsHeading()); ?> <?php endif; ?>">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>News/Events Source</label>
                                    <input class="form-control" required="required" placeholder="Source" type="text" name="source"  value="<?php if(@isset($news)): ?><?php echo e($news->getSource()); ?> <?php else: ?> GCR <?php endif; ?> ">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Type</label>
                                    <select class="form-control required" required="required" name="type"  data-route="<?php if(@isset($news)): ?> <?php echo e(route('events-form',['id',$news->getId()])); ?> <?php else: ?><?php echo e(route('events-form')); ?><?php endif; ?>">
                                        <option value="">Choose Type</option>
                                        <option value="1" <?php if(isset($news)): ?> <?php echo e($news->getType()=='1' ? "selected=selected" : ""); ?> <?php endif; ?>>News</option>
                                        <option value="2" <?php if(isset($news)): ?> <?php echo e($news->getType()=='2' ? "selected=selected" : ""); ?> <?php endif; ?>>Events</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="type"></div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>News/Events Description</label>
                                    <textarea rows="5"  id="description" required="required" class="form-control summernote" placeholder="Description" name="description"><?php if(isset($news)): ?> <?php echo e($news->getNewsSummary()); ?> <?php endif; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                        <?php if(isset($news)): ?>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" <?php echo e($news->getIsActive()?'checked':''); ?>>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" <?php echo e($news->getIsActive()?'':'checked'); ?>>
                                            <label for="active_0">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Image</label>
                                <button style="float:right;" type="button" class="btn btn-icon waves-effect btn-default waves-light genImg"> <i class="fa fa-plus"></i> </button>
                            </div>
                            <div class="col-md-12 imgGrid">
                                <div class="form-group">
                                    <?php echo e(csrf_field()); ?>

                                    <?php if(isset($news)): ?>
                                        <input type="hidden" name="id" value="<?php echo e($news->getId()); ?>">
                                        <input type="hidden" name="_method" value="PUT">

                                        <?php $__currentLoopData = $news->getNewsAttachment(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <span class="close fadeDiv">X</span>
                                                    <img class="img-thumbnail thumb-lg" src="<?php echo e(asset($value->getAttachment())); ?>" alt=""><br/><br/>
                                                    <input type="hidden" class="imageUrl" value="<?php echo e($value->getAttachment()); ?>" name="imageUrl[]"/>

                                                    <input class="filestyle actimage" data-size="sm" placeholder="Browse Image" type="file" name="actimage[]"/>
                                                </div>
                                            </div>

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                         <?php else: ?>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <img class="img-thumbnail thumb-lg" src="" alt=""><span class="close fadeDiv">X</span><br/><br/>

                                                <input class="filestyle actimage" data-size="sm" placeholder="Browse Image" type="file" name="actimage[]"/>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            
                                
                                    
                                        
                                    
                                
                                    
                            
                        </div>



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
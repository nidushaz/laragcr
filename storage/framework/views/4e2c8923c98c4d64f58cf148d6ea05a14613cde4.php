<?php $__env->startSection('title','News'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">News</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>News List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            <?php if(in_array('news.create', $isAuthorize)): ?>
                            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('news.create')); ?>"><i class="fa fa-plus"></i> Add News</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>News Heading</th>
                            <th>News & Events</th>
                            <th>Image</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        <?php $__empty_1 = true; $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            
                                <td class="editTd">
                                    <?php echo e($new->getId()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($new->getNewsHeading()); ?>

                                </td>
                            <td class="editTd">
                                <?php if($new->getType()=='1'): ?> News <?php elseif($new->getType()=='2'): ?> Event <?php endif; ?>
                            </td>
                                
                                    
                                
                                <td class="editTd">
                                    <img src="<?php echo e(asset($new->getThumbnail())); ?>" class="img-thumbnail thumb-lg">
                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-<?php echo e($new->getIsActive()?"success":"danger"); ?>">
                                        <?php echo e($new->getIsActive()?"Active":"Inactive"); ?>

                                     </span>
                                </td>
                                <td>
                                    <?php if(in_array('news.edit', $isAuthorize)): ?>
                                    <a href="<?php echo e(route('news.edit',['partners' => $new->getId()])); ?>" class="btn btn-icon waves-effect waves-light btn-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    &nbsp;&nbsp;&nbsp;<?php endif; ?>
                                     <button class="btn btn-icon waves-effect waves-light btn-white	">		<i class="fa fa-remove"></i>
                                    </button>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.adminLayouts2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
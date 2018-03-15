<?php $__env->startSection('title','Partner'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Experience Centre</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b> List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            <?php if(in_array('experience-centre.create', $isAuthorize)): ?>
                            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('experience-centre.create')); ?>"><i class="fa fa-plus"></i> Add</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Media</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        <?php $__empty_1 = true; $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="editTd">
                                    <?php echo e($video->getTitle()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($video->getCategoryId()->getName()); ?>

                                </td>
                                <td class="editTd">

                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-<?php echo e($video->getIsActive()?"success":"danger"); ?>">
                                        <?php echo e($video->getIsActive()?"Active":"Inactive"); ?>

                                     </span>
                                </td>
                                <td class="editTd">
                                    <?php echo e($video->getCreatedAt()->format('D d-M-Y')); ?>

                                </td>
                                <td>
                                    <?php if(in_array('experience-centre.edit', $isAuthorize)): ?>
                                    <a href="<?php echo e(route('experience-centre.edit',['experience-centre' => $video->getId()])); ?>" class="btn btn-icon waves-effect waves-light btn-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <?php endif; ?>
                                    &nbsp;&nbsp;&nbsp;
                                    <!-- <button class="btn btn-icon waves-effect waves-light btn-white	">		<i class="fa fa-remove"></i>
                                    </button> -->
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
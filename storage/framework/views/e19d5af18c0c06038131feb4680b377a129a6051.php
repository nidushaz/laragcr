<?php $__env->startSection('title','Testimonials'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Testimonials</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Testimonials List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('testimonials.create')); ?>"><i class="fa fa-plus"></i> Testimonial</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        <?php $__empty_1 = true; $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="editTd">
                                    <?php echo e($testimonial->getId()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($testimonial->getCompanyName()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($testimonial->getName()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo \Illuminate\Support\Str::words($testimonial->getTestimonial(), 20,'....'); ?>

                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-<?php echo e($label = $testimonial->getIsActive()?"success":"danger"); ?>">
                                        <?php echo e($labelText = $testimonial->getIsActive()?"Active":"Inactive"); ?>

                                     </span>
                                </td>
                                <td>
                                    <a href="<?php echo e(route('testimonials.edit',['$testimonials' => $testimonial->getId()])); ?>" class="btn btn-icon waves-effect waves-light btn-white">
                                        <i class="fa fa-edit"></i>
                                    </a>
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
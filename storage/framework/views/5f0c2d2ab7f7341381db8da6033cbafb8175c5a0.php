<?php $__env->startSection('title','Office'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Office</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Office List</b></h4>
                        </div>
                        <div class="col-sm-2">
                            <?php if(in_array('office.create', $isAuthorize)): ?>
                                <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('office.create')); ?>"><i class="fa fa-plus"></i> Add Office</a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Office Name</th>
                            <th>Country</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Contact Person</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        <?php $__empty_1 = true; $__currentLoopData = $offices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $office): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td class="editTd">
                                    <?php echo e($office->getId()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($office->getOfficeName()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($office->getCountry()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo \Illuminate\Support\Str::words($office->getAddress1(), 20,'....'); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($office->getContactNo()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($office->getContactPerson()); ?>

                                </td>
                                <td data-active="" class="editTd">
                                    <span class="label label-table label-<?php echo e($office->getIsActive()?"success":"danger"); ?>">
                                        <?php echo e($office->getIsActive()?"Active":"Inactive"); ?>

                                     </span>
                                </td>
                                <td>
                                    <?php if(in_array('office.edit', $isAuthorize)): ?>
                                        <a href="<?php echo e(route('office.edit',['partners' => $office->getId()])); ?>" class="btn btn-icon waves-effect waves-light btn-white">
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
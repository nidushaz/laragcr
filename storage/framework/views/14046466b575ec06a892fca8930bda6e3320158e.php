<?php $__env->startSection('title','Contact'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Contact Mail </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Who Contact Us</b></h4>
                        </div>
                        <div class="col-sm-2">
                            
                            
                            
                        </div>
                    </div>

                    <div class="clearfix"></div>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Customer Name</th>
                            <th>Partner Name</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Support</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        <?php $__empty_1 = true; $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td>
                                    <?php echo e($contact->getId()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($contact->getCustomerName()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($contact->getPartnerName()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($contact->getEmail()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($contact->getNumber()); ?>

                                </td>
                                <td class="editTd">
                                    <?php echo e($contact->getSupport()); ?>

                                </td>
                                <td data-active="" class="editTd">
                                    <?php echo e($contact->getCreatedAt()->format('l d-M-Y')); ?>

                                </td>
                                <td>
                                    <?php if(in_array('support.show', $isAuthorize)): ?>
                                        <a href="<?php echo e(route('support.show',['$contact' => $contact->getId()])); ?>" class="btn btn-icon waves-effect waves-light btn-white">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    <?php endif; ?>
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
<?php $__env->startSection('title','Contact'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Support Mail Content </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row h6">
                        <div class="col-sm-10">
                            <h4 class="m-t-0 header-title"><b>Mail Content</b></h4>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="<?php echo e(route('contact.index')); ?>"><i class="fa fa-reply"></i> Back</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box m-t-20">
                                <div class="media m-b-30 ">
                                    <div class="media-body">
                                        <span class="media-meta pull-right"> <?php echo e($contact->getCreatedAt()->format('l d-M-Y m:i A')); ?></span>
                                        <h4 class="text-primary m-0"><?php echo e($contact->getCustomerName()); ?></h4>
                                        <small class="text-muted">From:<?php echo e($contact->getEmail()); ?> <br/> Contact : <?php echo e($contact->getNumber()); ?> </small> <br/>
                                    </div>
                                </div> <!-- media -->
                                <p><b>Support : </b><?php echo e($contact->getSupport()); ?></p>
                                <b>Product Description</b>
                                <p><?php echo e($contact->getProdDescription()); ?></p>
                                <b>Problem Description</b>
                                <p><?php echo e($contact->getProbDescription()); ?></p>


                            </div>

                        </div>
                    </div>




                    <!-- End row -->
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.adminLayouts2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
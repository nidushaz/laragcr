<?php $__env->startSection('title','Contact'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Contact Mail Content </h4>
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
                                        <h4 class="text-primary m-0"><?php echo e($contact->getFirstName()); ?> <?php echo e($contact->getLastName()); ?></h4>
                                        <small class="text-muted">From:<?php echo e($contact->getEmail()); ?> <br/> Contact : <?php echo e($contact->getOfficeNumber()); ?> </small> <br/>
                                        <small class="text-muted">Website:<?php echo e($contact->getWebsite()); ?> </small><br/>
                                        <small class="text-muted">Address:<?php echo e($contact->getAddress()); ?> </small>
                                    </div>
                                </div> <!-- media -->
                                <p><b>Country : </b><?php echo e($contact->getCountry()); ?></p>
                                <p><b>Company Name : </b><?php echo e($contact->getCompanyName()); ?></p>


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
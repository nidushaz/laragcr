<?php $__env->startSection('title','Category Setting'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Category Setting</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Add Category</b></h4>
                    <p class="text-muted m-b-30 font-13">
                        Ex : Category Name.
                    </p>
                    <form class="form-horizontal" role="form" id="addForm" action="<?php echo e(route('category.store')); ?>" method="post">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="cat">Category : </label>
                            <div class="col-md-6">
                                <?php echo e(csrf_field()); ?>

                                <input id="country" name="category" class="form-control shaz-validator-text" required="" placeholder="Ex : Category Name">
                            </div>
                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="m-t-0 header-title"><b>Category List</b></h4>
                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th data-toggle="true">Id</th>
                            <th>Category</th>
                            <th data-hide="phone, tablet">Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody class="responseData">
                        <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <tr>
                                <td data-id="<?php echo e($category->getId()); ?>" class="editTd">
                                    <?php echo e($category->getId()); ?>

                                </td>
                                <td data-name="<?php echo e($category->getName()); ?>" class="editTd">
                                    <?php echo e($category->getName()); ?>

                                </td>
                                <td data-active="<?php echo e($category->getIsActive()?1:0); ?>" class="editTd">
                            <span class="label label-table label-<?php echo e($label = $category->getIsActive()?"success":"danger"); ?>">
                                  <?php echo e($labelText = $category->getIsActive()?"Active":"Inactive"); ?>

                            </span>
                                </td>
                                <td>
                                    <a href="#dataEdit" class="btn btn-icon waves-effect waves-light btn-white dataEdit" data-animation="fadein" data-plugin="custommodal" data-overlaySpeed="200" data-overlayColor="#36404a">
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





    <!-- Modal -->
    <div id="dataEdit" class="modal-demo">
        <button type="button" class="close" onclick="Custombox.close();">
            <span>&times;</span><span class="sr-only">Close</span>
        </button>
        <h4 class="custom-modal-title">Edit Category</h4>
        <div class="custom-modal-text">
            <form class="form-horizontal" role="form" id="editCategoryForm" method="POST" action="<?php echo e(route('category.update',['category' =>'0'])); ?>">
                <div class="form-group">
                    <label class="col-md-2 control-label" for="cat">Category : </label>
                    <div class="col-md-6">
                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name="id" id="id"/>
                        <input type="text" name="categoryName" id="name" class="form-control shaz-validator-text" required="" placeholder="Ex :Category Name">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-2 control-label" for="cat">Status : </label>
                    <div class="col-md-6">
                        <div class="radio radio-success radio-inline">
                            <input type="radio" id="active_1" name="active" value="1">
                            <label for="active_1">Active</label>
                        </div>
                        <div class="radio radio-danger radio-inline">
                            <input type="radio" id="active_0" name="active" value="0">
                            <label for="active_0">Inactive</label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-inverse waves-effect waves-light">Update</button>
            </form>
        </div>
    </div>


    <!-- seperate js for each page -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.adminLayouts2', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
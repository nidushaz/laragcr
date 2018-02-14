<?php if(session()->has('success-msg')): ?>
    <div class="alert alert-success alertifyshaz s">
        <?php echo e(session('success-msg')); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('error-msg')): ?>
    <div class="alert alert-danger alertifyshaz r">
        <?php echo e(session('error-msg')); ?>

    </div>
<?php endif; ?>

<?php if($errors->any()): ?>
    <div class="alert alert-danger alertifyshaz r">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>



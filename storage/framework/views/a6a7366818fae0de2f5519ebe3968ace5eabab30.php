<div class="sidebar-inner slimscrollleft">
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>

            <li class="text-muted menu-title">Navigation</li>

            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-home"></i> <span> Banners Setting </span> </a>
                <ul class="list-unstyled">
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(url('admin/page/'.$page->link)); ?>"><?php echo e($page->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </li>
            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-paint-bucket"></i> <span> General Setting </span> </a>
                <ul class="list-unstyled">
                    <li><a href="<?php echo e(url('admin/country')); ?>">Country</a></li>
                    <li><a href="<?php echo e(url('admin/industry')); ?>">Industry</a></li>
                    <li><a href="<?php echo e(url('admin/product-type')); ?>">Product Type</a></li>
                </ul>
            </li>

            <li><a href="<?php echo e(url('admin/solution-type')); ?>"><i class="ti-paint-bucket"></i> Solution Catalog</a></li>
            <li><a href="<?php echo e(url('admin/partners')); ?>"><i class="ti-paint-bucket"></i>Partners</a></li>

            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Experience Centre </span> </a>
                <ul class="list-unstyled">
                    <li><a href="<?php echo e(url('admin/category')); ?>">Category</a></li>
                    <li><a href="<?php echo e(url('admin/experience-centre')); ?>">Experience Centre</a></li>
                </ul>
            </li>
			
			<li><a href="<?php echo e(url('admin/news')); ?>"><i class="ti-paint-bucket"></i>News</a></li>


        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
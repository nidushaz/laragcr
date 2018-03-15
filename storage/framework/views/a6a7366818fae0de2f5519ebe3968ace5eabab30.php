<div class="sidebar-inner slimscrollleft">
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>

            <li class="text-muted menu-title">Navigation</li>

            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-files"></i> <span>Pages</span> </a>
                <ul class="list-unstyled">
                    <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e(url('admin/page/'.$page->link)); ?>"><?php echo e($page->name); ?></a></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </ul>
            </li>
            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-settings"></i> <span> General </span> </a>
                <ul class="list-unstyled">
                    <li><a href="<?php echo e(route('contact.index')); ?>">Contact Emails</a></li>
                    <li><a href="<?php echo e(route('support.index')); ?>">Support Emails</a></li>
                    <li><a href="<?php echo e(route('office.index')); ?>">Office</a></li>
                    <li><a href="<?php echo e(url('admin/country')); ?>">Country</a></li>
                    <li><a href="<?php echo e(url('admin/industry')); ?>">Industry</a></li>
                    <li><a href="<?php echo e(url('admin/product-type')); ?>">Product Type</a></li>
                </ul>
            </li>

            <li><a href="<?php echo e(url('admin/solution-type')); ?>"><i class="ti-layout-cta-left"></i> Solution Catalog</a></li>
            <li><a href="<?php echo e(url('admin/partners')); ?>"><i class="ion-android-social"></i>Partners</a></li>

            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-video-clapper"></i> <span> Experience Centre </span> </a>
                <ul class="list-unstyled">
                    <li><a href="<?php echo e(url('admin/category')); ?>">Category</a></li>
                    <li><a href="<?php echo e(url('admin/experience-centre')); ?>">Experience Centre</a></li>
                </ul>
            </li>
            <li><a href="<?php echo e(url('admin/news')); ?>"><i class="fa  fa-newspaper-o"></i>News & Events</a></li>

            <li><a href="<?php echo e(url('admin/providers')); ?>"><i class="fa fa-slideshare"></i>Providers</a></li>
            <li><a href="<?php echo e(url('admin/solutions')); ?>"><i class="fa   fa-sitemap"></i>Solutions</a></li>
            <li><a href="<?php echo e(url('admin/ads')); ?>"><i class="fa  fa-picture-o"></i>Ads</a></li>
            <li><a href="<?php echo e(url('admin/testimonials')); ?>"><i class="fa  fa-quote-left"></i>Testimonials</a></li>
            <li><a href="<?php echo e(route('roles.index')); ?>"><i class="fa fa-user-secret"></i>Roles & Permission</a></li>
            <li><a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-user-plus"></i>Users</a></li>


        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
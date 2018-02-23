<div class="sidebar-inner slimscrollleft">
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>

            <li class="text-muted menu-title">Navigation</li>

            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-files"></i> <span>Pages</span> </a>
                <ul class="list-unstyled">
                    @foreach($pages as $page)
                        <li><a href="{{url('admin/page/'.$page->link)}}">{{$page->name}}</a></li>
                    @endforeach

                </ul>
            </li>
            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-settings"></i> <span> General Setting </span> </a>
                <ul class="list-unstyled">
                    <li><a href="{{url('admin/country')}}">Country</a></li>
                    <li><a href="{{url('admin/industry')}}">Industry</a></li>
                    <li><a href="{{url('admin/product-type')}}">Product Type</a></li>
                </ul>
            </li>

            <li><a href="{{url('admin/solution-type')}}"><i class="ti-layout-cta-left"></i> Solution Catalog</a></li>
            <li><a href="{{url('admin/partners')}}"><i class="ion-android-social"></i>Partners</a></li>

            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-video-clapper"></i> <span> Experience Centre </span> </a>
                <ul class="list-unstyled">
                    <li><a href="{{url('admin/category')}}">Category</a></li>
                    <li><a href="{{url('admin/experience-centre')}}">Experience Centre</a></li>
                </ul>
            </li>
            <li><a href="{{url('admin/news')}}"><i class="fa  fa-newspaper-o"></i>News & Events</a></li>

            <li><a href="{{url('admin/providers')}}"><i class="fa fa-slideshare"></i>Providers</a></li>
            <li><a href="{{url('admin/solutions')}}"><i class="fa   fa-sitemap"></i>Solutions</a></li>
            <li><a href="{{url('admin/ads')}}"><i class="fa  fa-picture-o"></i>Ads</a></li>
            <li><a href="{{url('admin/testimonials')}}"><i class="fa  fa-quote-left"></i>Testimonials</a></li>


        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
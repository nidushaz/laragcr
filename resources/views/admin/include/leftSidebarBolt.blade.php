<div class="sidebar-inner slimscrollleft">
    <!--- Divider -->
    <div id="sidebar-menu">
        <ul>

            <li class="text-muted menu-title">Navigation</li>

            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-home"></i> <span> Banners Setting </span> </a>
                <ul class="list-unstyled">
                    @foreach($pages as $page)
                        <li><a href="{{url('admin/page/'.$page->link)}}">{{$page->name}}</a></li>
                    @endforeach

                </ul>
            </li>
            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-paint-bucket"></i> <span> General Setting </span> </a>
                <ul class="list-unstyled">
                    <li><a href="{{url('admin/country')}}">Country</a></li>
                    <li><a href="{{url('admin/industry')}}">Industry</a></li>
                    <li><a href="{{url('admin/product-type')}}">Product Type</a></li>
                </ul>
            </li>

            <li><a href="{{url('admin/solution-type')}}"><i class="ti-paint-bucket"></i> Solution Catalog</a></li>
            <li><a href="{{url('admin/partners')}}"><i class="ti-paint-bucket"></i>Partners</a></li>

            <li class="has_sub">
                <a href="#" class="waves-effect"><i class="ti-paint-bucket"></i> <span> Experience Centre </span> </a>
                <ul class="list-unstyled">
                    <li><a href="{{url('admin/category')}}">Category</a></li>
                    <li><a href="{{url('admin/experience-centre')}}">Experience Centre</a></li>
                </ul>
            </li>


        </ul>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
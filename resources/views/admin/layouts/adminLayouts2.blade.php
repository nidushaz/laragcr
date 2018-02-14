<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('admin.include.headBolt')
</head>
<body class="fixed-left">
    <!-- Begin page -->
    <div id="wrapper">

        <!-- top bar -->
        @include('admin.include.headerBolt')
        <!-- top bar end -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left side-menu">
            @include('admin.include.leftSidebarBolt')
        </div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                @yield('content')
            </div>
            <!-- end content content -->

            <footer class="footer text-right">
                @include('admin.include.footerBolt')
            </footer>

        </div>
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->

        <!-- Right Sidebar -->
        <div class="side-bar right-bar nicescroll">
            @include('admin.include.rightSidebarBolt')
        </div>
        <!-- End Right Sidebar -->
    </div>
    <!-- end mai wrapper -->

    @include('admin.include.jsBolt')
</body>
</html>

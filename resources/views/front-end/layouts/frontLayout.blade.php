<!DOCTYPE html>
<html lang="en">
    <head>
        @include('front-end.include.head')
    </head>
<body>
    <header>
        @include('front-end.include.header')
    </header>
<div class="clearfix"></div>
<section class="bnrSection" id="main-slider">
    <div class="container">
        <div class="col-md-2 col-xs-12">
            @include('front-end.include.leftsidebar')
        </div>
        <div class="col-md-8 col-xs-12  minSlide">
            @include('front-end.include.banner-area')
        </div>
        <div class="col-md-2 col-xs-12">
            @include('front-end.include.rightsidebar')
        </div>
    </div>
</section>

<div class="row-fluid">

    @yield('content')

</div>

<footer>
    @include('front-end.include.footer')
</footer>


    @include('front-end.include.jsLib')

</body>

</html>

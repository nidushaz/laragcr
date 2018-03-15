<!DOCTYPE html>
<html lang="en">
    <head>
        @include('front-end.include.head')
    </head>
<body>
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script>
    <header>
        @include('front-end.include.header')
    </header>
<div class="clearfix"></div>
<section class="bnrSection" id="main-slider">
    <div class="container">
        <div class="col-md-2 col-sm-2 col-xs-12">
            @include('front-end.include.leftsidebar')
        </div>
        <div class="col-md-8 col-xs-12 col-sm-8  minSlide">
            @include('front-end.include.banner-area')
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
            @include('front-end.include.rightsidebar')
        </div>
    </div>
</section>
    <section>
<div class="row">

    @yield('content')

</div>
    </section>
<footer>
    @include('front-end.include.footer')
</footer>


    @include('front-end.include.jsLib')

</body>

</html>

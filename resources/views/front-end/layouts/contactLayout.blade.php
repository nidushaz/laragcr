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

<div class="row-fluid">

    @yield('content')

</div>

<footer>
    @include('front-end.include.footer')
</footer>


@include('front-end.include.jsLib')

</body>

</html>

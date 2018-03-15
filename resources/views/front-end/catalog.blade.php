@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
    <div id="if" style="overflow: hidden;height:900px">
    <iframe id="frame1" width="100%" height="700" frameborder="0" scrolling="no" src="http://www.gcrcloud.com/solutions" style="border: 0px none; margin-left: 0px; height: 900px; margin-top: -297px; width:100%;"></iframe>
    </div>

        </div>
    </div>
@endsection
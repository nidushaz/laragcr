@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))

@section('content')


    <div class="container-fluid" style=" padding-right: 0px;  padding-left:0px;">

        <div class="col-md-12 col-sm-12 col-xs-12">
            {!! $content->getDescription() !!}
        </div>
    </div>
@endsection
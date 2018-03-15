@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))

@section('content')

    <div class="inner">
		<div class="flt text-center"><h2>About GCR</h2><hr/></div>
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                 {!! $content->getDescription() !!}
            </div>
        </div>
    </div>
    @endsection
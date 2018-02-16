@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
                <div class="row">
                    <div class="flt"><h2>SOLUTION CATALOG - {{$solution->getName()}}</h2></div>
                    <div class="flt">
                        @forelse($products as $product)
						<div class="bdr-btm">
                            <div class="col-md-2 col-sm-2 col-xs-12"><img src="{{asset($product->getProductSolutionId()->getProductProviderId()->getLogo())}}" style="width:120px;height:70px;"/></div>
                            <div class="col-md-7 col-sm-8 col-xs-12 solution-left">
                                <h2>{{$product->getProductSolutionId()->getProductName()}}</h2>
                                <p>{!!  \Illuminate\Support\Str::words($product->getProductSolutionId()->getDescription(), 20,'...') !!}</p>
                                <a href="{{route('contact')}}" class="btn-blue">Interested</a>
                            </div>
                            <div class="col-md-3 col-sm-2 col-xs-12 text-right">
                                @forelse($product->getProductSolutionId()->getProductImage() as $productImage)
                                <img src='{{$productImage->getMediaUrl()}}' style="width:100px;height:70px">
                                    @empty
                                    No Media Url
                                @endforelse
                            </div>
						</div>
						</hr>
                            <div class="clearfix"></div>
                            @empty
                            No Data Found
                        @endforelse

                    </div>

                </div>








            </div>
        </div>

    </div>
@endsection
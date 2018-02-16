@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')
    <div class="container">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
            <div class="row">
                <div class="flt"><h2>SOLUTION CATALOG</h2></div>
                <div class="flt">
                    <p>Win the shift to the micro-moments<br/>
                        Accelerate digital transition with cloud-based and networking solutions fulfilled to your business needs.</p>
                </div>
            </div>

            @forelse($solutions as $solution)
                <a href ="{{route('solutions.list',['id'=>$solution->getId()])}}">
            <div class="grid">
                <div class="col-md-2 col-sm-2 col-xs-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <figure class="effect-zoe">
                        <img src="{{asset($solution->getImage())}}" class="img-responsive" alt="solu-img1">
                        <figcaption>
                            <h2>{{$solution->getName()}}</h2>
                            <p>{!! \Illuminate\Support\Str::words($solution->getDescription(), 10,' .')  !!}</p>
                        </figcaption>
                    </figure>

                </div>
            </div>
                </a>
                @empty
            @endforelse






        </div>
    </div>

        </div>
    @endsection
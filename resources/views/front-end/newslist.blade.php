@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')
    <div class="container">
        <div class="col-md-9 col-sm-9 col-xs-12 mobPdnone">
            @if(@isset($new))
                <div class="col-md-12 col-xs-12 newsInner" style="margin: 25px 0 25px 0;">
                    <h2>{{$new->getNewsHeading()}}</h2>
                    <p>GCR News [ {{$new->getUpdatedAt()->format('l, d F Y')}} ]</p>
                    <img src="{{asset($new->getThumbnail())}}" alt="{{$new->getNewsHeading()}}" class="img-responsive">
                    <div>
                        {!! $new->getNewsSummary()  !!}
                    </div>
                </div>
            @else
                <div class="col-md-12 col-xs-12">
                    <p>Sorry  No News Found. Please Click <a href="{{route('news')}}">Here</a> to redirect at news page.</p>
                </div>
            @endif
        </div>

        <div class="col-md-3 col-sm-3 col-xs-12 newsRight">
		
            <h3 class="g-title">Archive</h3>
            <h4 style="color:#848484;font-style:italic;">2018</h4>
            @forelse($news as $new)
                <p style="font-style:italic"><strong>{{$new->getUpdatedAt()->format('d F Y')}}</strong> - {{$new->getNewsHeading()}}</p>
            @empty
                <h2>No Data</h2>
            @endforelse
        </div>
    </div>
@endsection
@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')
    <div class="container">
        <div class="col-md-9 col-sm-9 col-xs-12 mobPdnone">
            {{--{{var_dump($news)}}--}}
			@forelse($news as $new)
            <div class="col-md-12 col-sm-12 col-xs-12 news mobPdnone">
                    <div class="col-md-3 col-xs-12">
                        <img src="{{$new->getThumbnail()}}" alt="News Image" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <h3><a href="">{{$new->getNewsHeading()}}</a></h3>
                        <p style="font-style: italic">GCR news {{$new->getUpdatedAt()->format('D d-F-Y')}} </p>
                        <p>{!! \Illuminate\Support\Str::words($new->getNewsSummary(), 10,' .')  !!}</p>
                    </div>
            </div>
            @empty
                <h2>No Data</h2>
            @endforelse
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
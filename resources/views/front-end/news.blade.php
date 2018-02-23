@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')
    <div class="container">
	<div class="mrTop">
        <div class="col-md-9 col-sm-9 col-xs-12 mobPdnone">
            {{--{{var_dump($news)}}--}}
			@forelse($news as $new)
            <div class="col-md-12 col-sm-12 col-xs-12 news mobPdnone">
                    <div class="col-md-3 col-xs-12">
                        <img src="{{asset($new->getThumbnail())}}" alt="{{$new->getNewsHeading()}}" class="img-responsive">
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <h3><a href="{{route('news.list',['id'=>$new->getId()])}}">{{$new->getNewsHeading()}}</a></h3>
                        <p style="font-style: italic">{{ ($new->getSource())?$new->getSource():"GCR" }} {{ $new->getUpdatedAt()->format('D d-F-Y')}} </p>
                        <p>{!! \Illuminate\Support\Str::words($new->getNewsSummary(), 40,' .')  !!}</p>
                    </div>
            </div>
            @empty
                <h2>No Data</h2>
            @endforelse
		</div>
	
		<div class="col-md-3 col-sm-3 col-xs-12 newsRight">
                <h3 class="g-title">Archive</h3>
                @foreach($sortedData as $key=>$value)
                    <h4 style="color:#848484;font-style:italic;">{{$key}}</h4>
                    @foreach($value as $data)
                        <p style="font-style:italic"><strong>{{$data['updateAt']}}</strong> - <a href="{{route('news.list',['id'=>$data['id']])}}">{{$data['heading']}}</a></p>
                    @endforeach
                @endforeach
            </div>
			</div>
    </div>
	<style>
	
		.newsRight{border: 1px solid #efefef; background: #fbfbfb; margin: 114px 0 0 0;}
	</style>
@endsection
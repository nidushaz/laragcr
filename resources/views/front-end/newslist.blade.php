@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')
    <div class="container">
	
	<div class="row padding-bottom-80">
        <div class="col-md-9 col-sm-9 col-xs-12 mobPdnone">
            @if(@isset($new))
                <div class="col-md-12 col-xs-12 newsInner">
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

        <div class="col-md-3 col-sm-3 col-xs-12 newsRight side-bar">
			<div class="heading-side-bar margin-bottom-10">
                <h4>Archive</h4>
              </div>
            <div class="clearfix"></div>
            @foreach($sortedData as $key=>$value)
                <h4 style="color:#848484;font-style:italic;">{{$key}}</h4>
                <ul class="cate">
                    @foreach($value as $data)
                        <li style="font-style:italic"><strong>{{$data['updateAt']}}</strong> - <a href="{{route('news.list',['id'=>$data['id']])}}">{{$data['heading']}}</a></li>
                    @endforeach
                </ul>
            @endforeach

		
	 </div>
	</div>
    </div>
@endsection
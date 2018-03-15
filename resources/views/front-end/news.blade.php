@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')
    <div class="container">
	<div class="mrTop">
		<div class="news">
		<div class="col-md-9 col-sm-9 col-xs-12 mobPdnone">
		{{--{{var_dump($news)}}--}}
			@forelse($news as $new)
			<div class="col-md-4 clearfix"> 
              <!-- Article -->
              <article class="news-post">
                <div class="post-img">
				<img src="{{asset($new->getThumbnail())}}" alt="{{$new->getNewsHeading()}}" class="img-responsive">
                  <div class="date"> {{ ($new->getSource())?$new->getSource():"GCR" }} {{ $new->getUpdatedAt()->format('D d-F-Y')}} </div>
                </div>
				<div class="atag">
					<a href="{{route('news.list',['id'=>$new->getId()])}}">{{$new->getNewsHeading()}}</a>
				</div>
                <div style="min-height:150px">
                <p>{!! \Illuminate\Support\Str::words($new->getNewsSummary(), 40,' .')  !!}</p>
                </div>
                <!-- Post Info -->
                
              </article>
            </div>
			@empty
			@endforelse
		</div>
	</div>
	
	 
	
		 <div class="col-md-3 col-sm-3 col-xs-12 side-bar">
			<div class="heading-side-bar margin-bottom-10">
                <h4>Archives</h4>
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
	<style>
	
		.newsRight{border: 1px solid #efefef; background: #fbfbfb; margin: 114px 0 0 0;}
	</style>
@endsection
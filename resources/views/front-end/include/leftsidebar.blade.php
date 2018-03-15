<div class="leftSideBr">
    <h3>INDUSTRY</h3>
	
    <div class="leftSlider ">
	
	<div class="verticalCarousel">
     <ul class="left-scroll">
		@foreach($solutions as $solution)
			<li><a href="{{route('solutions.catalog')}}">{{$solution->getName()}}</a></li>
        @endforeach
	</ul>
	
	
        </div>
	
    <!--<ul class="verticalCarouselGroup vc_list">
        @foreach($solutions as $solution)
         <!--<li><a href="{{route('solutions.list',['id' => $solution->getId()])}}">{{$solution->getName()}}</a></li>
            <li><a href="{{route('solutions.catalog')}}">{{$solution->getName()}}</a></li>
            @endforeach
    </ul>-->
    </div>
    <div class="clearfix"></div>
    <h4>About GCR</h4>
    <div class="clearfix"></div>
    <p>{!! \Illuminate\Support\Str::words($abouts->getDescription(), 19,' ...')!!} <a href="{{route('about-GCR')}}" style="color:maroon">Read more</a></p>
</div>
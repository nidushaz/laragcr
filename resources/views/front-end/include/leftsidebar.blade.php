<div class="leftSideBr">
    <h3>Solutions for</h3>
	
    <div class="leftSlider ">
    <ul>
        @foreach($solutions as $solution)
        <li><a href="{{route('solutions.list',['id' => $solution->getId()])}}">{{$solution->getName()}}</a></li>
            @endforeach
    </ul>
    </div>
    <div class="clearfix"></div>
    <h4>About GCR</h4>
    <div class="clearfix"></div>
    <p>{!! \Illuminate\Support\Str::words($abouts->getDescription(), 20,' ...')  !!}</p>
</div>
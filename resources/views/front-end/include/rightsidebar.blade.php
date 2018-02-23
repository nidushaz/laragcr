<div class="RightSideBr">
    <h1>News</h1>
    <div class="clearfix"></div>

    @forelse($news as $new)

    <h3><a href="{{route('news.list',['id'=>$new->id])}}">{{\Illuminate\Support\Str::words($new->news_heading,7,'')}} </a></h3>
    <div><img src="{{asset($new->thumbnail)}}" class="img-responsive" alt="right-side-img"></div>
     <!--    <p>{!! \Illuminate\Support\Str::words($new->news_summary, 5,' ...')  !!}</p> -->
    @empty
        No News Found
    @endforelse
    <div class="clearfix"></div>
<div class="event">
    <h1>Events</h1>
    <div class="clearfix"></div>

    @forelse($events as $event)

    <h3><a href="{{route('news.list',['id'=>$event->id])}}">{{\Illuminate\Support\Str::words($event->news_heading,7,'')}}</a></h3>
    <div><img src="{{asset($event->thumbnail)}}" class="img-responsive" alt="right-side-img"></div>
	</div>
        <!-- <p>{!! \Illuminate\Support\Str::words($event->news_summary, 5,' ...')  !!}</p> -->
    @empty
        No Events Found
    @endforelse
</div>
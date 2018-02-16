<div class="RightSideBr">
    <h1>News</h1>
    <div class="clearfix"></div>

    @forelse($news as $new)

    <h3>{{$new->news_heading}}</h3>
    <div><img src="{{asset($new->thumbnail)}}" class="img-responsive" alt="right-side-img"></div>
        <p>{!! \Illuminate\Support\Str::words($new->news_summary, 5,' ...')  !!}</p>
    @empty
        No News Found
    @endforelse
    <div class="clearfix"></div>
    <h2>EDMs</h2>
    <div class="clearfix"></div>
    <div><img src="{{asset('images/front-images/edm-img.jpg')}}" class="img-responsive" alt="edm-img"></div>
</div>
@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
			
                <div class="">
                    <div class="flt"><h2>Experience Centre</h2><hr/></div>
                    <div class="flt">
                            <div class="row">
                                @foreach ($categories as $category)
                                  <h3 class="solutionh3">{{$category->getName()}}</h3>
                                    <div class="col-md-12">
                                        @php $counter=1; @endphp;
                                        @forelse($category->getExpCategory() as $expVideo)
                                            @if($expVideo->getIsActive()==1)
                                            @if ($counter>4)
                                                @break
                                            @endif
                                            <div class="col-md-3 col-sm-3 col-xs-12">
                                                <iframe width="100%" height="160" src=" {{$expVideo->getMediaUrl()}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
												
											<div class="vidTittle">{{$expVideo->getTitle()}}</div>
                                            </div>
                                                @php $counter++; @endphp
                                            @endif
                                        @empty
                                            No Video Found In This Category
                                        @endforelse
                                        <div class="clearfix"></div>
                                        <a href="{{route('experience-centre.list',['id'=>$category->getId()])}}" class="category-btn">View More</a>
                                    </div>
                                @endforeach

                            </div>
                    </div>

                </div>


            </div>
        </div>

    </div>
@endsection
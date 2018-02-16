@extends('admin.layouts.adminLayouts2')
@section('title')
    {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} | News
@endsection

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} News </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="{{route('news.index')}}"><i class="fa fa-reply"></i> News List</a>
                        </div>
                    </div>
                    <hr/>
                    <form class="form-horizontal" role="form" id="addForm" action="@if(@isset($news)) {{route('news.update',['news' => $news->getId()] )}} @else{{route('news.store')}} @endif" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>
                                        {{ csrf_field() }}
                                        @isset($news)
                                            <input type="hidden" name="id" value="{{$news->getId()}}">
                                            <input type="hidden" name="_method" value="PUT">
                                        @endisset
                                        <select class="form-control select2" required="required" id="cat_id" name="country">
                                            <option value="">Choose Country</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->getId()}}" @isset($news) {{$country->getId() == $news->getNewsCountryId()->getId() ? "selected=selected" : "" }} @endisset >{{$country->getName()}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <label>Thumbnail</label>
                                            {{ csrf_field() }}
                                            @isset($news)
                                                <input type="hidden" name="id" value="{{$news->getId()}}">
                                                <input type="hidden" name="_method" value="PUT">
                                            @endisset
                                            <input class="filestyle" data-size="sm" placeholder="Browse Image" type="file" name="thumbimage"/>
                                        </div>
                                    </div>
                                    <div class="col-md-5" id="img-preview">
                                        @isset($news)
                                            <img class="img-thumbnail thumb-lg" src="{{asset($news->getThumbnail())}}" alt="">
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>News Heading</label>
                                    <input class="form-control" required="required" placeholder="News heading" type="text" name="title"  value="@isset($news){{$news->getNewsHeading()}} @endisset">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>News Description</label>
                                    <textarea rows="5"  id="description" required="required" class="form-control summernote" placeholder="Description" name="description">@isset($news) {{$news->getNewsSummary()}} @endisset</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                        @isset($news)
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" {{$news->getIsActive()?'checked':''}}>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" {{$news->getIsActive()?'':'checked'}}>
                                            <label for="active_0">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endisset

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Image</label>
                                <button style="float:right;" type="button" class="btn btn-icon waves-effect btn-default waves-light genImg"> <i class="fa fa-plus"></i> </button>
                            </div>
                            <div class="col-md-12 imgGrid">
                                <div class="form-group">
                                    {{ csrf_field() }}
                                    @if (isset($news))
                                        <input type="hidden" name="id" value="{{$news->getId()}}">
                                        <input type="hidden" name="_method" value="PUT">

                                        @foreach($news->getNewsAttachment() as $key=>$value)
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <span class="close fadeDiv">X</span>
                                                    <img class="img-thumbnail thumb-lg" src="{{asset($value->getAttachment())}}" alt=""><br/><br/>
                                                    <input type="hidden" class="imageUrl" value="{{$value->getAttachment()}}" name="imageUrl[]"/>

                                                    <input class="filestyle actimage" data-size="sm" placeholder="Browse Image" type="file" name="actimage[]"/>
                                                </div>
                                            </div>

                                        @endforeach

                                         @else
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <img class="img-thumbnail thumb-lg" src="" alt=""><span class="close fadeDiv">X</span><br/><br/>

                                                <input class="filestyle actimage" data-size="sm" placeholder="Browse Image" type="file" name="actimage[]"/>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            {{--<div class="col-md-5" id="img-preview">--}}
                                {{--@isset($news)--}}
                                    {{--@foreach($news->getNewsAttachment() as $key=>$value)--}}
                                        {{--<img class="img-thumbnail thumb-lg" src="{{asset($value->getAttachment())}}" alt="">--}}
                                    {{--@endforeach--}}
                                {{--@endisset--}}
                                    {{--<button type="button" class="btn btn-icon waves-effect btn-default waves-light genImg"> <i class="fa fa-plus"></i> </button>--}}
                            {{--</div>--}}
                        </div>



                        <div class="row">
                            <button type="submit" class="btn btn-default waves-effect waves-light btn-md">
                                Submit
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
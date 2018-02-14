@extends('admin.layouts.adminLayouts')

@section('title','')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <div class = "col-md-6">
                                <h4 class="title">Page Settings</h4>
                                <p class="category">Home Page</p>
                            </div>
                            <div class = "col-md-6">
                                <!--<button type="submit" class="btn btn-info btn-fill pull-right">Add Banner</button>-->
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="content">
                            <div>

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#content" aria-controls="home" role="tab" data-toggle="tab">Content</a></li>
                                    <li role="presentation"><a href="#banner" aria-controls="profile" role="tab" data-toggle="tab">Banners</a></li>
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <form name="pageForm" action="{{route('page.store')}}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div role="tabpanel" class="tab-pane fade in active active" id="content">
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Content</label>
                                                    <textarea rows="5" class="form-control" placeholder="Page Content Here.." name="description">@isset($pageContentData) {{$pageContentData->getDescription()}} @endisset</textarea>
                                                </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="banner">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Banner Name</label>
                                                        <input class="form-control" placeholder="Banner Name" type="text" name="name" value="@isset($pageBannerData) {{$pageBannerData->getName()}} @endisset">
                                                        <input type="text" name="page_id" value="{{$pageid}}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Banner Heading</label>
                                                        <input class="form-control" placeholder="Banner Heading" type="text" name="heading" value="@isset($pageBannerData) {{$pageBannerData->getHeading()}} @endisset">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Anchor Link</label>
                                                        <input class="form-control" placeholder="Anchor Link" type="url" name="anchor_url" value="@isset($pageBannerData) {{$pageBannerData->getAnchorUrl()}} @endisset">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">

                                                        <div class="form-group">
                                                            <label>Anchor Text</label>
                                                            <input class="form-control" placeholder="Anchor Text" type="text" name="anchor_text" value="@isset($pageBannerData) {{$pageBannerData->getAnchorText()}} @endisset">
                                                        </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Country</label>
                                                        <select class="form-control" id="country_id" name="country_id">
                                                            <option value="">Choose Country</option>
                                                                @foreach($countries as $country)
                                                                <option value="{{$country->getId()}}" @isset($pageBannerData) {{$pageBannerData->getBannerCountryId()->getId() == $country->getId() ? "selected=selected" : "" }} @endisset >{{$country->getName()}}</option>
                                                                @endforeach

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="col-md-7">
                                                        <div class="form-group">
                                                            <label>Banner Image</label>
                                                            <input class="form-control" placeholder="Browse Image" type="file" name="image" value="@isset($pageBannerData) {{$pageBannerData->getImage()}} @endisset">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        @isset($pageBannerData)
                                                            <img style="width:150px" src="{{asset($pageBannerData->getImage())}}" alt="">
                                                        @endisset
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Banner Description</label>
                                                    <textarea rows="5" id="banner_description" class="form-control" placeholder="Banner Description" name="banner_description">@isset($pageBannerData) {{$pageBannerData->getBannerDescription()}} @endisset</textarea>
                                                </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-info btn-fill pull-right">Submit</button>
                                        </div>
                                    </form>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

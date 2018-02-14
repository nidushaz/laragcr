@extends('admin.layouts.adminLayouts2')
@section('title','Banners')

@section('content')
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Page Setting</h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-tabs">
                <li class="active">
                    <a href="#page" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-home"></i></span>
                        <span class="hidden-xs">Content</span>
                    </a>
                </li>
                <li class="">
                    <a href="#banner" data-toggle="tab" aria-expanded="false">
                        <span class="visible-xs"><i class="fa fa-cog"></i></span>
                        <span class="hidden-xs">Banner</span>
                    </a>
                </li>
            </ul>
            <div class="tab-content">

                <div class="tab-pane active" id="page">
                    <form name="pageForm" class="validateForm" action="{{route('page.store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Content</label>
                                    <textarea rows="5" class="form-control summernote" placeholder="Page Content Here.." name="description">@isset($pageContentData) {{$pageContentData->getDescription()}} @endisset</textarea>
                                </div>
                            </div>
                        </div>

                </div>
                <div class="tab-pane" id="banner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banner Name</label>
                                <input class="required form-control"  parsley-trigger="change" required="required" placeholder="Banner Name" type="text" name="name" value="@isset($pageBannerData){{$pageBannerData->getName()}} @endisset">
                                <input type="hidden" name="page_id" value="{{$pageid}}">

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banner Heading</label>
                                <input class="required form-control"  required="required" placeholder="Banner Heading" type="text" name="heading" value="@isset($pageBannerData){{$pageBannerData->getName()}} @endisset">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Anchor Link</label>
                                <input class="required form-control" required="required" placeholder="Anchor Link" type="url" name="anchor_url" value="@isset($pageBannerData) {{$pageBannerData->getAnchorUrl()}} @endisset">
                            </div>
                        </div>
                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Anchor Text</label>
                                <input class="required form-control" required="required" placeholder="Anchor Text" type="text" name="anchor_text" value="@isset($pageBannerData) {{$pageBannerData->getAnchorText()}} @endisset">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control select2" required="required" id="country_id" name="country_id">
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
                                    <input class="filestyle" id="banner-img" data-size="sm" placeholder="Browse Banner Image" type="file" name="image" value="@isset($pageBannerData) {{$pageBannerData->getImage()}} @endisset">
                                </div>
                            </div>
                            <div class="col-md-5" id="img-preview">
                                @isset($pageBannerData)
                                    <img class="img-thumbnail thumb-lg" src="{{asset($pageBannerData->getImage())}}" alt="">
                                @endisset
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Banner Description</label>
                                <textarea rows="5"  id="banner_description" required="required" class="form-control summernote" placeholder="Banner Description" name="banner_description">@isset($pageBannerData) {{$pageBannerData->getBannerDescription()}} @endisset</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="clear-fix"></div>
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

    <!-- end row -->
    </div>

@endsection

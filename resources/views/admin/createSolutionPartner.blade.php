@extends('admin.layouts.adminLayouts2')
@section('title')
   {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} | Solution Partner
    @endsection

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} Solution Partner </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="{{route('partners.index')}}"><i class="fa fa-reply"></i> Solution Partner List</a>
                        </div>
                    </div>
                    <hr/>
                    <form class="form-horizontal" role="form" id="addForm" action="@if(@isset($partner)) {{route('partners.update',['partners' => $partner->getId()] )}} @else{{route('partners.store')}} @endif" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Solution Partner Name</label>
                                    <input class="form-control" required="required" placeholder="Solution Partner" type="text" name="title"  value="@isset($partner){{$partner->getTitle()}} @endisset">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        {{ csrf_field() }}
                                        @isset($partner)
                                            <input type="hidden" name="id" value="{{$partner->getId()}}">
                                            <input type="hidden" name="_method" value="PUT">
                                        @endisset
                                        <input class="filestyle" id="banner-img" data-size="sm" placeholder="Browse Logo" type="file" name="image"/>
                                    </div>
                                </div>
                                <div class="col-md-5" id="img-preview">
                                    @isset($partner)
                                        <img class="img-thumbnail thumb-lg" src="{{asset($partner->getLogo())}}" alt="Logo">
                                    @endisset
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Banner Description</label>
                                    <textarea rows="5"  id="description" required="required" class="form-control summernote" placeholder="Description" name="description">@isset($partner) {{$partner->getDescription()}} @endisset</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                        @isset($partner)
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" {{$partner->getIsActive()?'checked':''}}>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" {{$partner->getIsActive()?'':'checked'}}>
                                            <label for="active_0">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endisset
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
@extends('admin.layouts.adminLayouts2')
@section('title')
    {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} | Experience Centre
@endsection

@section('content')
    <style>
        .form-horizontal .form-group{
            margin-right: 4px!important;

        }
    </style>
    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} Experience Centre </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="{{route('experience-centre.index')}}"><i class="fa fa-reply"></i> Back </a>
                        </div>
                    </div>
                    <hr/>
                    <form class="form-horizontal" role="form" id="addForm" action="@if(@isset($experience)) {{route('experience-centre.update',['experience-centre' => $experience->getId()] )}} @else{{route('experience-centre.store')}} @endif" method="POST">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        {{ csrf_field() }}
                                        @isset($experience)
                                            <input type="hidden" name="_method" value="PUT">
                                        @endisset
                                        <select class="form-control select2" required="required" id="cat_id" name="category">
                                            <option value="">Choose Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->getId()}}" @isset($experience) {{$experience->getCategoryId()->getId() == $category->getId() ? "selected=selected" : "" }} @endisset >{{$category->getName()}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                <hr/>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input class="form-control" required="required" placeholder="Title" type="text" name="title[]"  value="@isset($experience){{$experience->getTitle()}} @endisset">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> Tags  </label><br/>
                                        <input class="tagss">
                                        <input class="form-control tags" required="required" type="text" name="tags[]" data-role="tagsinput" placeholder="Add Tags" value="@isset($experience){{$experience->getTag()}} @endisset"/>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label> URL  </label>
                                        <input class="form-control" required="required" placeholder="You Tube Url" type="url" name="url[]"  value="@isset($experience){{$experience->getMediaUrl()}} @endisset">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label> </label>

                                    </div>
                                </div>
                                <div class="col-sm-1">
                                    <div class="form-group">
                                        <label> </label>
                                        <button type="button" class="btn btn-icon waves-effect btn-default waves-light" onclick="init.addForm( '{{route("experience-form")}}' )"> <i class="fa fa-plus"></i> </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="clear-fix"></div>
                        @isset($experience)
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" {{$experience->getIsActive()?'checked':''}}>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" {{$experience->getIsActive()?'':'checked'}}>
                                            <label for="active_0">Inactive</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endisset
                        <div class="addMoreElement"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-default waves-effect waves-light btn-md">
                                    Submit
                                </button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
@extends('admin.layouts.adminLayouts2')
@section('title')
{{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} | Product
@endsection

@section('content')

<div class="container">

    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <h4 class="page-title"> {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} Product</h4>
            <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-sm-2">
                        <a class="btn btn-default waves-effect waves-light" href="{{route('solutions.index')}}"><i class="fa fa-reply"></i> Products List</a>
                    </div>
                </div>
                <hr/>
                <form class="form-horizontal" role="form" id="addForm" action="@if(@isset($product)) {{route('solutions.update',['solutions' => $product->getId()] )}} @else{{route('solutions.store')}} @endif" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Name</label>
                                <input class="form-control" required="required" placeholder="Product Name" type="text" name="productName"  value="@isset($product){{$product->getProductName()}} @endisset">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Title</label>
                                <input class="form-control" required="required" placeholder="Meta Title" type="text" name="metaTitle"  value="@isset($product){{$product->getMetaTitle()}} @endisset">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Keywords</label>
                                <input class="form-control" required="required" placeholder="Meta Keywords" type="text" name="metaKeywords"  value="@isset($product){{$product->getMetaKeywords()}} @endisset">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea rows="5" class="form-control" required="required" placeholder="Meta Description" name="metaDescription" id="metaDescription">@isset($product){{$product->getMetaDescription()}} @endisset</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Country</label>
                                <select class="form-control select2" required="required" id="country" name="country">
                                    <option value="">Choose Country</option>
                                    @foreach($countries as $country)
                                        <option value="{{$country->getId()}}" @isset($product) {{$country->getId() == $product->getProductCountryId()->getId() ? "selected=selected" : "" }} @endisset >{{$country->getName()}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Solution Type</label>
                                <select class="form-control select2" required="required" id="productSolutionTypeId" name="productSolutionTypeId[]" multiple="multiple">
                                    <option value="">Choose Solution Type</option>
                                    @foreach($solutionTypes as $solutionType)
                                        <option value="{{$solutionType->getId()}}" @isset($product) {{in_array($solutionType->getId(),$selectedSolutions)  ? "selected=selected" : "" }} @endisset>{{$solutionType->getName()}}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea rows="5"  id="description" required="required" class="form-control summernote" placeholder="Description" name="description">@isset($product) {{$product->getDescription()}} @endisset</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="col-md-6">
                                    <label>Image</label>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary" id="addBtn"><i class="fas fa-plus"></i></button>
                                </div>
                            </div>
                        </div>
                        @if(isset($product))
                            <div id="imageSection">
                            @foreach($product->getProductImage() as $productImage)
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <span class="close removeBtn">X</span>
                                        <img class="thumb-lg imgPreview" src="{{$productImage->getMediaUrl()}}"/>
                                        <input type="hidden" class="imageUrl" value="{{$productImage->getMediaUrl()}}" name="productImageUrl[]"/>
                                        <input class="filestyle actimage" data-size="sm" placeholder="Browse Image" type="file" name="productImage[]"/>
                                    </div>
                                </div>
                            @endforeach
                            </div>
                        @else
                        <div id="imageSection">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <img class="thumb-lg imgPreview" />
                                    <input class="filestyle actimage" data-size="sm" placeholder="Browse Image" type="file" name="productImage[]"/>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="clear-fix"></div>
                    @isset($product)
                    <div class="row">
                        <div class="form-group">
                            <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                            <div class="col-md-6">
                                <div class="radio radio-success radio-inline">
                                    <input type="radio" id="active_1" name="active" value="1" {{$product->getIsActive()?'checked':''}}>
                                    <label for="active_1">Active</label>
                                </div>
                                <div class="radio radio-danger radio-inline">
                                    <input type="radio" id="active_0" name="active" value="0" {{$product->getIsActive()?'':'checked'}}>
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
                    {{ csrf_field() }}
                    @isset($product)
                        <input type="hidden" name="id" value="{{$product->getId()}}">
                        <input type="hidden" name="_method" value="PUT">
                    @endisset
                </form>
            </div>
        </div>
    </div>

</div>
@endsection
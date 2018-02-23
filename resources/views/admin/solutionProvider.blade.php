@extends('admin.layouts.adminLayouts2')
@section('title')
    {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} | Solution Provider
@endsection

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} Solution Provider </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="{{route('providers.index')}}"><i class="fa fa-reply"></i> Solution Provider List</a>
                        </div>
                    </div>
                    <hr/>
                    <form class="form-horizontal" role="form" id="addForm" action="@if(@isset($provider)) {{route('providers.update',['providers' => $provider->getId()] )}} @else{{route('providers.store')}} @endif" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> First Name</label>
                                    <input class="form-control" required="required" placeholder="Solution Provider First Name" type="text" name="first_name"  value="@isset($provider){{$provider->getFirstName()}} @endisset">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input class="form-control" required="required" placeholder="Solution Provider Last Name" type="text" name="last_name"  value="@isset($provider){{$provider->getLastName()}} @endisset">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label> Company Name</label>
                                    <input class="form-control" required="required" placeholder="Company Name" type="text" name="company"  value="@isset($provider){{$provider->getCompanyName()}} @endisset">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Company Website</label>
                                    <input class="form-control"  placeholder="www.websitename.com" type="text" name="website"  value="@isset($provider){{$provider->getCompanySite()}} @endisset">
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Contact Number</label>
                                    <input class="form-control"  placeholder="Contact Number" type="text" name="contact"  value="@isset($provider){{$provider->getCompanyContactNo()}} @endisset">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="col-md-7">
                                    <div class="form-group">
                                        <label>Logo</label>
                                        {{ csrf_field() }}
                                        @isset($provider)
                                            <input type="hidden" name="id" value="{{$provider->getId()}}">
                                            <input type="hidden" name="_method" value="PUT">
                                        @endisset
                                        <input class="filestyle" id="banner-img" data-size="sm" placeholder="Browse Logo" type="file" name="image"/>
                                    </div>
                                </div>
                                <div class="col-md-5" id="img-preview">
                                    @isset($provider)
                                        <img class="img-thumbnail thumb-lg" src="{{asset($provider->getLogo())}}" alt="Logo">
                                    @endisset
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Country</label>
                                    <select class="form-control select2" required="required" id="country" name="country">
                                        <option value="">Choose Country</option>
                                        @foreach($countries as $country)
                                            <option value="{{$country->getId()}}" @isset($provider) {{$country->getId() == $provider->getCountry() ? "selected=selected" : "" }} @endisset >{{$country->getName()}}</option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Address</label>
                                    <textarea class="form-control" required="required" name="address" placeholder="Address">@isset($provider){{$provider->getAddress()}} @endisset</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                        @isset($provider)
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" {{$provider->getIsActive()?'checked':''}}>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" {{$provider->getIsActive()?'':'checked'}}>
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
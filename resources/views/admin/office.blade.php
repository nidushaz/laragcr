@extends('admin.layouts.adminLayouts2')
@section('title')
    {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} | Office
@endsection

@section('content')

    <div class="container">

        <!-- Page-Title -->
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title"> {{ ucfirst(substr(Route::currentRouteName(),strpos(Route::currentRouteName(),".") + 1)) }} Office </h4>
                <p class="text-muted page-title-alt">Welcome to GCR admin panel !</p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-sm-2">
                            <a class="btn btn-default waves-effect waves-light" href="{{route('office.index')}}"><i class="fa fa-reply"></i> Office List</a>
                        </div>
                    </div>
                    <hr/>
                    <form class="form-horizontal" role="form" id="addForm" action="@if(@isset($office)) {{route('office.update',['office' => $office->getId()] )}} @else{{route('office.store')}} @endif" method="POST">


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Office Name</label>
                                        {{ csrf_field() }}
                                        @isset($office)
                                            <input type="hidden" name="id" value="{{$office->getId()}}">
                                            <input type="hidden" name="_method" value="PUT">
                                        @endisset
                                        <input class="form-control" required="required" placeholder="Office Name" type="text" name="office_name" value="@isset($office){{$office->getOfficeName()}}@endisset"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Head Office</label>
                                        <input class="form-control" required="required" placeholder="HeadOffice City Name" type="text" name="head_office" value="@isset($office){{$office->getHeadOffice()}}@endisset"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Contact Person</label>
                                        <input class="form-control" required="required" placeholder="Contact Person Name" type="text" name="contact_person" value="@isset($office){{$office->getContactPerson()}}@endisset"/>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Contact Number</label>
                                        <input class="form-control" required="required" placeholder="Contact Number" type="text" name="contact_number" value="@isset($office){{$office->getContactNo()}}@endisset"/>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Country</label>

                                        <select class="form-control select2" required="required" id="cat_id" name="country">
                                            <option value="">Choose Country</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->getName()}}" @isset($office) {{$country->getName() == $office->getCountry() ? "selected=selected" : "" }} @endisset >{{$country->getName()}}</option>
                                            @endforeach

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" required="required" placeholder="Email" type="text" name="email" value="@isset($office){{$office->getEmail()}}@endisset"/>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input class="form-control" required="required" placeholder="City" type="text" name="city" value="@isset($office){{$office->getCity()}}@endisset"/>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>State</label>
                                        <input class="form-control" required="required" placeholder="State" type="text" name="state" value="@isset($office){{$office->getState()}}@endisset"/>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Pincode</label>
                                        <input class="form-control" required="required" placeholder="Pincode" type="text" name="pincode" value="@isset($office){{$office->getPincode()}}@endisset"/>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Primary Address</label>
                                        <textarea rows="5"  id="address1" required="required" class="form-control" placeholder="Primary Address" name="address1">@isset($office) {{$office->getAddress1()}} @endisset</textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Secondary Address</label>
                                        <textarea rows="5"  id="address2" required="required" class="form-control" placeholder="Secondary Address" name="address2">@isset($office) {{$office->getAddress2()}} @endisset</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear-fix"></div>
                        @isset($office)
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-md-1 control-label text-left" for="cat">Status : </label>
                                    <div class="col-md-6">
                                        <div class="radio radio-success radio-inline">
                                            <input type="radio" id="active_1" name="active" value="1" {{$office->getIsActive()?'checked':''}}>
                                            <label for="active_1">Active</label>
                                        </div>
                                        <div class="radio radio-danger radio-inline">
                                            <input type="radio" id="active_0" name="active" value="0" {{$office->getIsActive()?'':'checked'}}>
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
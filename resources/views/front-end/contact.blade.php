@extends('front-end.layouts.contactLayout')
@section('content')

    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
                <div class="row contInfo">
                    <div class="flt"><h2>Contact Form</h2></div>
                    <div class="flt">
                        <div class="row">
                            <div class="col-md-8 contBrd">
                            <form action="{{route('contact.submit')}}" method="post">
                                <fieldset class="alertDiv"></fieldset>

                                    <div class="form-group">
                                        <label>First Name</label> <span class="red">* <small></small></span>
                                        <input class="form-control required" placeholder="First Name" type="text" name="firstName">
                                        {{csrf_field()}}
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name</label> <span class="red">* <small></small></span>
                                        <input class="form-control required"  placeholder="Last Name" type="text" name="lastName">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label><span class="red">* <small></small></span>
                                        <input class="form-control required"  placeholder="Email" type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Industry</label> <span class="red">* <small></small></span>
                                        <select class="form-control required"  name="industry">
                                            <option value="">Choose Industry</option>
                                            <option value="Industry">industry name</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Country</label> <span class="red">* <small></small></span>
                                        <select class="form-control required"  name="country">
                                            <option value="">Choose Country</option>
                                            @foreach($countries as $country)
                                            <option value="{{$country->getName()}}">{{$country->getName()}}</option>
                                                @endforeach
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Topic</label> <span class="red">* <small></small></span>
                                        <select class="form-control required"  name="topic">
                                            <option value="I want to be a certified partner" selected="selected">I want to be a certified partner</option>
                                            <option value="Others">Others</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>Company Name</label><span class="red">* <small></small></span>
                                        <input class="form-control required"  placeholder="Company Name" type="text" name="company">
                                    </div>

                                    <div class="form-group">
                                        <label>Company Size</label> <span class="red">* <small></small></span>
                                        <select class="form-control required"  name="company-size">
                                            <option value="0-50" selected="selected">0-50</option>
                                            <option value="50-250">50-250</option>
                                            <option value="250-1000">250-1000</option>
                                            <option value="more than 1000">More than 1000</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Website</label>
                                        <input class="form-control"  placeholder="www.yourwebsite.com" type="text" name="website">
                                    </div>
                                    <div class="form-group">
                                        <label>Office Number</label> <span class="red">* <small></small></span>
                                        <input class="form-control required"  placeholder="Office Phone Number" type="text" name="number">
                                    </div>
                                    <div class="form-group-text">
									
                                        <label>Address</label> <span class="red">* <small></small></span>
                                        <textarea class="form-control required"  placeholder="Address" name="address"></textarea>
                                    </div>
									<div class="clearfix"></div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info" value="Submit"/>
                                    </div>


                            </form>
                            </div>
                            <div class="col-md-4">
                                @forelse($offices as $office)
                                <h4>{{$office->getOfficeName()}}</h4>
                                <p>
                                    Address : {{$office->getAddress1()}} {{$office->getCity()}},{{$office->getState()}}<br/>
                                    Pincode : {{$office->getPincode()}}<br/>
                                    Phone : +{{$office->getContactNo()}}<br/>
                                    {{$office->getEmail()}}- E-Mail
                                </p>

                            @empty
                                @endforelse
                            </div>
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </div>

@endsection
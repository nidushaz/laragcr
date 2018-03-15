@extends('front-end.layouts.frontLayout')
@section('banner-image',asset($banner->getImage()))
@section('content')
    <div class="container">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="feature" style="background-image:none; padding:0px 0px 30px 0px">
                <div class="row contInfo">
					{{--<div class="col-md-4 col-sm-4 col-xs-12">--}}
                              {{--<div class="contact-item">--}}
                                  {{--<div class="content">--}}
                                      {{--<h5>Head Office : </h5>--}}
                                      {{--<p>Some address<br>Pincode : 212121 <br/>Mumbai,Maharashtra</p>--}}
                                  {{--</div>--}}
                                  {{--<span class="icon">--}}
									{{--<i class="fa fa-thumb-tack" aria-hidden="true"></i>--}}
								  {{--</span>--}}
                              {{--</div>--}}
                    {{--</div>--}}
						  
						  
						  <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="contact-item">
                                  <div class="content">
                                      <h5>call us : </h5>
                                      <p>+ (01) 123 456 7896<br>+ (01) 123 456 7899</p>
                                  </div>
                                  <span class="icon ">
									<i class="fa fa-phone" aria-hidden="true"></i>

								  </span>
                              </div>
                          </div>
						  
						  <div class="col-md-6 col-sm-6 col-xs-12">
                              <div class="contact-item">
                                  <div class="content">
                                      <h5>Web mail : </h5>
                                      <p><a href="mailto:some@g.com">some@g.com</a></p>
									  <p></p>
                                  </div>
                                  <span class="icon">
									<i class="fa fa-envelope" aria-hidden="true"></i>

								  </span>
                              </div>
                          </div>
				
				
                    <!--<div class="col-md-6">
                        Telephone : 99999999
                    </div>-->
                </div>
               
                <div class="row contInfo contact-1">
				<div class="row">
				<div class="col-md-12">
                    <div class="flt">
						<h2>Support <span>Form</span> </h2>
					</div>
					</div>
					</div>
                    <div class="flt">
                        <div class="row">
                            <div class="col-md-8 col-sm-8 col-xs-12">
                                <form action="{{route('support.submit')}}" method="post">
                                    <fieldset class="alertDiv"></fieldset>

                                    <div class="form-group">
                                        <label>Customer Name</label> <span class="red">* <small></small></span>
                                        <input class="form-control required" placeholder="Customer Name" type="text" name="customerName">
                                        {{csrf_field()}}
                                    </div>
                                    <div class="form-group">
                                        <label>Partner Name</label> <span class="red">* <small></small></span>
                                        <input class="form-control required"  placeholder="Partner Name" type="text" name="partnerName">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label><span class="red">* <small></small></span>
                                        <input class="form-control required"  placeholder="Email" type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Contact Number</label> <span class="red">* <small></small></span>
                                        <input class="form-control required"  placeholder="Contact Number" type="text" name="number">
                                    </div>
                                    <div class="form-group">
                                        <label>Support</label> <span class="red">* <small></small></span>
                                        <select class="form-control required"  name="support">
                                            <option value="high">High</option>
                                            <option value="medium">Medium</option>
                                            <option value="low">Low</option>
                                        </select>
                                    </div>
                                    <div class="form-group-text">
                                        <label>Product Description</label> <span class="red">* <small></small></span>
                                        <textarea class="form-control required"  placeholder="Product Description" name="prodDescription"></textarea>
                                    </div>
                                    <div class="form-group-text">
                                        <label>Problem Description</label> <span class="red">* <small></small></span>
                                        <textarea class="form-control required"  placeholder="Problem Description" name="probDescription"></textarea>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-info" value="Submit"/>
                                    </div>


                                </form>
                            </div>
                            <!--<div class="col-md-4">
                                @forelse($offices as $office)
                                    <h4>{{$office->getOfficeName()}}</h4>
                                    <p>
                                        Address : {{$office->getAddress1()}} {{$office->getCity()}},{{$office->getState()}}<br/>
                                        Pincode : {{$office->getPincode()}}<br/>
                                        Phone : +{{$office->getContactNo()}}<br/>
                                        E-Mail : {{$office->getEmail()}}
                                    </p>

                                @empty
                                @endforelse
                            </div>-->
                        </div>

                    </div>
                </div>

            </div>


        </div>
    </div>

@endsection
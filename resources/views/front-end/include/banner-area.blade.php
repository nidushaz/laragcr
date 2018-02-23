<div class="carousel slide">
    <div class="carousel-inner">
        <div class="item active mobSlide" style="background-image: url(@yield('banner-image')); background-size: cover;">
            <div class="">
                <div class="row slide-margin">
                    <div class="col-sm-12">
                        <div class="carousel-content">
                            <h2 class="animation animated-item-1">
                                @if(@isset($banner)) {{$banner->getHeading()}} @else Banner Not Set @endif
                            </h2>
                            <!-- <p>(Kindly Changes the background to put this message asthetic way)</p>-->
                        </div>
                    </div>
                </div>

               <!-- <div class="row">
                    <div class="col-sm-12">
                        <div class="nbs-flexisel-container">
                            <div class="nbs-flexisel-inner">
                                <ul id="flexiselDemo3" class="nbs-flexisel-ul" style="display: block; left: -219.6px;">
                                    <li class="nbs-flexisel-item" style="width:250px;">Efficiency</li>
                                    <li class="nbs-flexisel-item" style="width:250px;">Enhanced Profitability </li>
                                    <li class="nbs-flexisel-item" style="width: 250px;">Business Intelligence </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>-->

                <div class="row">
                    <div class="col-sm-12 col-md-12 pdn-left pdn-right">
                        @isset($ads)
                            @foreach($ads as $ad)
                                <div class="banrAd">
                                    <img src="{{asset($ad->getImage())}}" class="img-responsive image">
									<div class="overlay">Add one</div>
                                </div>
                            @endforeach
                        @endisset
                    </div>
                </div>
            </div>
        </div>
        <!--/.item-->
    </div>
    <!--/.carousel-inner-->
</div>
{{--{{asset("images/front-images/slider/banner.png")}}--}}
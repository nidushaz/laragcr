@extends('front-end.layouts.frontLayout')

@section('banner-image',asset($banner->getImage()))

    @section('content')
        <style>.overlay p{color:#fff!important}</style>
        <section class="secMrgTop">


            <div class="feature">
                <div class="">
                    <div class="row">
						<div class="col-md-2 col-sm-2 col-xs-12">
                            @isset($ads)
                                @if(!@empty($ads))
                                <div class="banrAd">
                                    <img src="{{asset($ads[0]->getImage())}}" class="img-responsive image">
									<div class="ad-leftCorn"><i class="fa fa-info-circle" aria-hidden="true"> Ads </i>
</div>
                                    <div class="overlay">
                                        {!! $ads[0]->getAddDetail() !!}
                                    </div>
                                </div>
                                    @else
                                    not
                                @endif
                            @endisset
						</div>
						<div class="col-md-8 col-sm-8 col-xs-12">
						<div class="flt"><h2>GCR Eco System</h2>
							<hr>
							
						<div class="flt">
                         <p>{!! $content->getDescription() !!}</p>
                        </div>
						
						<div class="grid">
                    <div class="text-center">
					
					
                    
					
					
					<div class="bx-wrapper">
					<div style=" float: left; margin-right: 10px;"> 
						<img src="{{asset('images/front-images/vart-text.png')}}" class="img-responsive solumobhide" alt="socail-vsit">
					</div>
	
	<div class="bxslider">
    @forelse($solutions as $solution)

      <div class="fortSolut" >
            <div class="hi-icon-wrap hi-icon-effect wow" data-wow-duration="1000ms" data-wow-delay="300ms">
                <a href="{{route('solutions.catalog')}}" >
				<figure class="effect-zoe toggler">
                <img src="{{asset($solution->getImage())}}" class="img-responsive" alt="solu-img1">
				<figcaption>
				<h2>{{$solution->getName()}}</h2>
				<p>{!! \Illuminate\Support\Str::words($solution->getDescription(),10,'...') !!}</p>
			</figcaption>	
		</figure>
                </a>
      </div>
     </div>
    @empty
@endforelse
</div>
	
	
	
	

					
</div>					
					
					
					
					

                       
                        
                        
						
							
                    </div>
					 <div class="clearfix"></div>
				 <div class="og-expander">
					<div class="row">
					
					<a title="Close" class="fancybox-item closebtn fancybox-close" href="javascript:;">X</a>
						<div class="col-md-12 col-sm-12 col-xs-12 ">
						
						<p><a href="#">Content</a></p>
						</div>
					</div>
				 </div>
				</div>
						
						</div>
						
						</div>
                        <!-- -->
						<div class="col-md-2 col-sm-2 col-xs-12">
                            @isset($ads)
							<div class="banrAd">
                              <img src="{{asset($ads[1]->getImage())}}" class="img-responsive image">
							  <div class="ad-leftCorn"><i class="fa fa-info-circle" aria-hidden="true"> Ads </i>
</div>
						      <div class="overlay">{!! $ads[1]->getAddDetail() !!}</div>
                            </div>
                            @endisset
						</div>
					
                        
                        
                    </div>
				
                </div>
            </div>


        </section>



        <div class="about">
            <div class="container">
                <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">

<div id="example">
  <carousel-3d :controls-visible="true" :controls-prev-html="'&#10092;'" :controls-next-html="'&#10093;'" 
               controls-width="30" :controls-height="60" :clickable="false">
			   @forelse($videos as $key=>$video)
				<slide :index="{{$key}}">
				  <figure>
					<iframe width="100%" height="270" src="  {!! $video->getMediaUrl() !!}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				  </figure>
			   </slide>
			   @empty-
			   @endforelse
  </carousel-3d>

               
	</div>			
						
					
					
					
				
<!------ Video Code---------->


                </div>

            </div>
        </div>

        <div class="lates">
            <div class="container">

                <div class="col-md-1 col-xs-12"></div>
                <div class="col-md-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <h1>Customer Testimonial </h1>
                    <div class="clearfix"></div>
                    <div id="myCarousel" class="carousel slide " data-ride="carousel">

                        <div class="carousel-inner">
                            @forelse($testimonials as $testimonial)
                            <div class="item active testi">
                                <div>
                                    <p>{!! $testimonial->getTestimonial() !!}</p>
                                    <div class="arrow-down"></div>
                                </div>
                                <div class="profile-circle">
                                    <img src="{{asset($testimonial->getImage())}}" alt="client-img">
                                    <h3>{{$testimonial->getName()}}</h3>
                                    <p>{{$testimonial->getDesignation()}}</p>
                                </div>

                            </div>
                            @empty
                            @endforelse
                        </div>
                        <!--<div class="carousel-inner">
                           <div class="test"></div>
                            <div class="item active">

                                <img src="http://placehold.it/760x400/cccccc/ffffff">
                                <div class="carousel-caption">
                                <h4><a href="#">Lorem ipsum dolor sit amet consetetur sadipscing</a></h4>


                                </div>
                            </div>

                            <div class="item">
                                <img src="http://placehold.it/760x400/999999/cccccc">
                                <div class="carousel-caption">
                                <h4><a href="#">consetetur sadipscing elitr, sed diam nonumy eirmod</a></h4>

                                </div>
                            </div>

                            <div class="item">

                                <img src="http://placehold.it/760x400/dddddd/333333">
                                <div class="carousel-caption">
                                <h4><a href="#">tempor invidunt ut labore et dolore</a></h4>

                                </div>

                            </div>

                           </div>-->

                        <!--<ul class="list-group col-md-3 carousel-indicators">

                             <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                             <li data-target="#myCarousel" data-slide-to="1" ></li>
                             <li data-target="#myCarousel" data-slide-to="2" ></li>

                     </ul>-->
                    </div>
                </div>
                <div class="col-md-1 col-xs-12"></div>
                <div class="col-md-4 col-xs-12 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                    <h1>Let’s Get Social</h1>
                    <div class="clearfix"></div>
                    <img src="{{asset('images/front-images/socail-vsit.jpg')}}" class="img-responsive" alt="socail-vsit">
                    {{--<div class="fb-page" data-href="https://www.facebook.com/pages/GCR-cloud/348980468582498" data-tabs="timeline" data-width="390" data-height="290" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/pages/GCR-cloud/348980468582498" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/pages/GCR-cloud/348980468582498">Facebook</a></blockquote></div>--}}
                </div>

            </div>
        </div>

        <section id="partner">
            <div class="container">
                <div class="wow fadeInDown">
                    <h2>Our Platform Ecosystem Partners</h2>
                    <p>(Explore the information below to learn more)</p>
                </div>

             <div class="">
			 <div class="center slider">
			 @forelse($partners as $partner)
				<div>
					
					<img class="img-responsive wow"  src="{{asset($partner->getLogo())}}">
					
				</div>
				@empty
                        @endforelse
			 </div>
			 
                    <!--<div class="nbs-flexisel-container-one">
                            <div class="nbs-flexisel-inner-one" style="width:100%;">
                                <ul id="flexiselDemo7" class="nbs-flexisel-ul" style="display: block; left: -219.6px;">
                                    @forelse($partners as $partner)
                        <li><a href="#"><img class="img-responsive wow"  src="{{asset($partner->getLogo())}}"></a></li>
                            @empty
                        @endforelse
                                </ul>
                            </div>

                        </div>-->
                </div>
                
                
                
                
                
            </div>
            
            
            
        </section>
        
        
       
  
</div>
        <!--/#partner-->
        @endsection
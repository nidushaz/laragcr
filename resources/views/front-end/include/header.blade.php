
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="navigation">
            <div class="container">
                <div class="col-md-2 col-sm-2 mobPdn">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand">
                            <a href="{{route('home')}}">
                                <img src="{{asset('images/front-images/logo.png')}}" alt="logo"></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-sm-8 col-xs-12 mobPdn">
                    <div class="navbar-collapse collapse">
                        <div class="menu">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation"><a href="{{route('solutions')}}" class="active">Solutions</a></li>
                                <li role="presentation"><a href="{{route('solutions')}}">e-Catalog</a></li>
                                <li role="presentation"><a href="{{route('experience-centre')}}">Experience Centre</a></li>
                                <li role="presentation"><a href="{{route('contact')}}">Support</a></li>
                                <li role="presentation"><a href="blog.html"> Partners</a></li>
                                <li role="presentation"><a href="{{route('news')}}"> News</a></li>
                                <li role="presentation"><a href="contact.html">About GCR</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-2 col-xs-12">
                    <div class="search-icon">

                        <div id="show"><input type="text" placeholder="Search.."></div>
                    </div>
                    <div class="social-icon">
                        <ul class="social-network">
                            <li><a href="#"> <img src="{{asset('images/front-images/search-icon.jpg')}}" class="secon" width="21" height="19" alt="search-icon"></a></li>
                            <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </nav>
    @include('alert');
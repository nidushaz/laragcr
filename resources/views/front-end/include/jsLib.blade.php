
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('js/front-js/jquery-2.1.1.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('js/front-js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/front-js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/front-js/functions.js')}}"></script>
<script src="{{asset('js/front-js/jquery.isotope.min.js')}}"></script>
<script src="{{asset('js/front-js/wow.min.js')}}"></script>
<script src="{{asset('js/front-js/jquery.flexisel.js')}}"></script>
<script src="{{asset('js/front-js/modernizr.js')}}"></script> <!-- Modernizr -->
<script src="{{asset('js/front-js/jquery.mobile.min.js')}}"></script>
<script src="{{asset('js/front-js/main.js')}}"></script>
<script src="{{asset('js/front-js/vue.js')}}"></script>
<script src="{{asset('js/front-js/vue-carousel-3d.min.js')}}"></script>


<script type="text/javascript">

    $(window).load(function() {
        $("#flexiselDemo1").flexisel();
        $("#flexiselDemo2").flexisel({
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });

        $("#flexiselDemo3").flexisel({
            visibleItems: 5,
            animationSpeed: 1000,
            autoPlay: true,
            autoPlaySpeed: 3000,
            pauseOnHover: true,
            enableResponsiveBreakpoints: true,
            responsiveBreakpoints: {
                portrait: {
                    changePoint:480,
                    visibleItems: 1
                },
                landscape: {
                    changePoint:640,
                    visibleItems: 2
                },
                tablet: {
                    changePoint:768,
                    visibleItems: 3
                }
            }
        });

        $("#flexiselDemo4").flexisel({
            clone:false
        });

        $(".secon").click(function(){
            $("#show").show();

        });
		
	

    });
</script>

<script>
$( document ).ready(function() {
    $(".alertifyshaz").delay(3000).fadeOut(1000);
    	 new Vue({
  el: '#example',
  data: {
    slides: 5
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  }
})
});

</script>
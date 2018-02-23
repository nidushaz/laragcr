
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo e(asset('js/front-js/jquery-2.1.1.js')); ?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo e(asset('js/front-js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/front-js/jquery.prettyPhoto.js')); ?>"></script>
<script src="<?php echo e(asset('js/front-js/functions.js')); ?>"></script>
<script src="<?php echo e(asset('js/front-js/jquery.isotope.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/front-js/wow.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/front-js/jquery.flexisel.js')); ?>"></script>
<script src="<?php echo e(asset('js/front-js/modernizr.js')); ?>"></script> <!-- Modernizr -->
<script src="<?php echo e(asset('js/front-js/jquery.mobile.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/front-js/main.js')); ?>"></script>
<script src="<?php echo e(asset('js/front-js/vue.js')); ?>"></script>
<script src="<?php echo e(asset('js/front-js/vue-carousel-3d.min.js')); ?>"></script>
<script src="<?php echo e(asset('js/front-js/slick.js')); ?>"></script>


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
		
	$("#flexiselDemo7").flexisel({
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
	$(function(){
			$(".leftSlider").scrollText({
				'duration': 2000
  });


 });	
		
});


</script>

<script>
$( document ).ready(function() {
	
	
	$('.toggler').click(function(e){
      $('.og-expander').slideToggle();
});

$('.closebtn').click(function(e){
      $('.og-expander').slideToggle();
});

$(".toggler").click(function() {
    $('html, body').animate({
        scrollTop: $(".flt").offset().top
    }, 1000);
});
			
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
});
    	 $("body").on("submit","form",function(){
    	     var $flag = true;
    	     var $required = $(this).find(".required");
    	     $required.each(function(){
    	         if($.trim($(this).val())==''){
    	             $(this).addClass('error');
    	             $(this).siblings(".red").children("small").html("Field is required.")
    	             $flag =  false;
                 }else{
                     $(this).siblings(".red").children("small").html("")
    	             $(this).removeClass('error');
                 }

             });
    	     if(!$flag){
                 $('html, body').animate({
                     scrollTop: $(".error").first().offset().top - 250
                 }, 1000);
    	         return $flag;
             }


         })
});

</script>

<script type="text/javascript">
    $(document).on('ready', function() {
		
		
       $(".center").slick({
        dots: true,
		autoPlay: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 5,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
		autoPlay: true,
        variableWidth: true
      });
      $(".lazy").slick({
        lazyLoad: 'ondemand', // ondemand progressive anticipated
        infinite: true,
		autoPlay: true,
      });
    });
</script>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php echo $__env->make('front-end.include.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </head>
<body>
    <div id="fb-root"></div>
        <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
</script>
    <header>
        <?php echo $__env->make('front-end.include.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </header>
<div class="clearfix"></div>
<section class="bnrSection" id="main-slider">
    <div class="container">
        <div class="col-md-2 col-sm-2 col-xs-12">
            <?php echo $__env->make('front-end.include.leftsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-8 col-xs-12 col-sm-8  minSlide">
            <?php echo $__env->make('front-end.include.banner-area', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12">
            <?php echo $__env->make('front-end.include.rightsidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
    </div>
</section>
    <section>
<div class="row">

    <?php echo $__env->yieldContent('content'); ?>

</div>
    </section>
<footer>
    <?php echo $__env->make('front-end.include.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</footer>


    <?php echo $__env->make('front-end.include.jsLib', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</body>

</html>

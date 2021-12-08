<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rich and Shaq" />
    <meta name="copyright" content="Vizius Bazar" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="keywords" content="Vizius Bazar, Rich and Shaq"/>
    <meta name="robots" content="index,follow" />
    <meta name="description" content="- Vizius Bazar -" />
    <meta name="distribution" content="global" />
    <meta name="resource-type" content="document" />

    <title> <?php echo $__env->yieldContent('title'); ?> - Vizius Bazar - </title>
    <link rel="icon" type="image/jpg" href="<?php echo e(asset('images/favicon.jpg')); ?>" />

    <link rel="stylesheet" href="<?php echo e(asset('css/animate.css')); ?>">
    <!-- Latest Bootstrap min CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/all.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/ionicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/themify-icons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/linearicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/flaticon.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/simple-line-icons.css')); ?>">
    <!--- owl carousel CSS-->
    <link rel="stylesheet" href="<?php echo e(asset('assets/owlcarousel/css/owl.carousel.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/owlcarousel/css/owl.theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/owlcarousel/css/owl.theme.default.min.css')); ?>">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/magnific-popup.css')); ?>">
    <!-- Slick CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/slick-theme.css')); ?>">
    <!-- Style CSS -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/responsive.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('web/css/flaticon.css')); ?>">

  </head>

<body>

  <?php echo $__env->make('web.partials.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->make('web.partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a>

  <!-- Latest jQuery -->
  <script src="<?php echo e(asset('assets/js/jquery-1.12.4.min.js')); ?>"></script>
  <!-- popper min js -->
  <script src="<?php echo e(asset('assets/js/popper.min.js')); ?>"></script>
  <!-- Latest compiled and minified Bootstrap -->
  <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>
  <!-- owl-carousel min js  -->
  <script src="<?php echo e(asset('assets/owlcarousel/js/owl.carousel.min.js')); ?>"></script>
  <!-- magnific-popup min js  -->
  <script src="<?php echo e(asset('assets/js/magnific-popup.min.js')); ?>"></script>
  <!-- waypoints min js  -->
  <script src="<?php echo e(asset('assets/js/waypoints.min.js')); ?>"></script>
  <!-- parallax js  -->
  <script src="<?php echo e(asset('assets/js/parallax.js')); ?>"></script>
  <!-- countdown js  -->
  <script src="<?php echo e(asset('assets/js/jquery.countdown.min.js')); ?>"></script>
  <!-- imagesloaded js -->
  <script src="<?php echo e(asset('assets/js/imagesloaded.pkgd.min.js')); ?>"></script>
  <!-- isotope min js -->
  <script src="<?php echo e(asset('assets/js/isotope.min.js')); ?>"></script>
  <!-- jquery.dd.min js -->
  <script src="<?php echo e(asset('assets/js/jquery.dd.min.js')); ?>"></script>
  <!-- slick js -->
  <script src="<?php echo e(asset('assets/js/slick.min.js')); ?>"></script>
  <!-- elevatezoom js -->
  <script src="<?php echo e(asset('assets/js/jquery.elevatezoom.js')); ?>"></script>
  <!-- scripts js -->
  <script src="<?php echo e(asset('assets/js/scripts.js')); ?>"></script>

  <?php echo $__env->yieldPushContent('script'); ?>

  </body>
</html>
<?php /**PATH D:\Shaq\Vizius_Bazar\resources\views/web/partials/master.blade.php ENDPATH**/ ?>
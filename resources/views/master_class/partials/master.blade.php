<!DOCTYPE html>
<html lang="en">
  <head>
    <title>@yield('title') - Moonline</title>
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png')}}" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="" />
    <meta name="copyright" content="" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="keywords" content=""/>
    <meta name="robots" content="index,follow" />
    <meta name="description" content="" />

    <link rel="icon" href="img/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="web/css/bootstrap.min.css">
    <link rel="stylesheet" href="web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="web/css/magnific-popup.css">
    <link rel="stylesheet" href="web/css/font-awesome.min.css">
    <link rel="stylesheet" href="web/css/themify-icons.css">
    <link rel="stylesheet" href="web/css/nice-select.css">
    <link rel="stylesheet" href="web/css/flaticon.css">
    <link rel="stylesheet" href="web/css/animate.css">
    <link rel="stylesheet" href="web/css/slicknav.css">
    <link rel="stylesheet" href="web/css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->

    <script type="text/javascript">
      document.oncontextmenu = function(){return false;}
    </script>
  </head>

  <body>

  @include('master_class.partials.nav')

  @yield('content')

  @include('master_class.partials.footer')

    <script src="web/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="web/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="web/js/popper.min.js"></script>
    <script src="web/js/bootstrap.min.js"></script>
    <script src="web/js/owl.carousel.min.js"></script>
    <script src="web/js/isotope.pkgd.min.js"></script>
    <script src="web/js/ajax-form.js"></script>
    <script src="web/js/waypoints.min.js"></script>
    <script src="web/js/jquery.counterup.min.js"></script>
    <script src="web/js/imagesloaded.pkgd.min.js"></script>
    <script src="web/js/scrollIt.js"></script>
    <script src="web/js/jquery.scrollUp.min.js"></script>
    <script src="web/js/wow.min.js"></script>
    <script src="web/js/nice-select.min.js"></script>
    <script src="web/js/jquery.slicknav.min.js"></script>
    <script src="web/js/jquery.magnific-popup.min.js"></script>
    <script src="web/js/plugins.js"></script>

    <script src="web/js/contact.js"></script>
    <script src="web/js/jquery.ajaxchimp.min.js"></script>
    <script src="web/js/jquery.form.js"></script>
    <script src="web/js/jquery.validate.min.js"></script>
    <script src="web/js/mail-script.js"></script>

    <script src="web/js/main.js"></script>

  @stack('script')

  </body>
</html>

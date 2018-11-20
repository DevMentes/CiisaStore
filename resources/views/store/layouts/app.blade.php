<!DOCTYPE html>
<!--[if IE 7]> <html class="no-js ie7 oldie" lang="en-US"> <![endif]-->
<!--[if IE 8]> <html class="no-js ie8 oldie" lang="en-US"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en">
<head>
    <!-- TITLE OF SITE -->
    <title> CiisaStore </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="description" content="app landing page template" />
    <meta name="keywords" content="app, landing page, gradient background, image background, video background, template, responsive, bootstrap" />
    <meta name="developer" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FAV AND ICONS   -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ asset('images/apple-icon.png') }}">
    <link rel="shortcut icon" sizes="72x72" href="{{ asset('images/apple-icon-72x72.png') }}">
    <link rel="shortcut icon" sizes="114x114" href="{{ asset('images/apple-icon-114x114.png') }}">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7cPlayfair+Display:400,400i,700,900" rel="stylesheet">

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="{{ asset ('icons/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- Custom Icon Font -->
    <link rel="stylesheet" href="{{ asset ('fonts/flaticon.css') }}">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset  ('plugins/css/bootstrap.min.css')}}">
    <!-- Fancybox-->
    <link rel="stylesheet" href="{{ asset  ('plugins/css/jquery.fancybox.min.css') }}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{ asset ('plugins/css/animate.css') }}">
    <!-- owl -->
    <link rel="stylesheet" href="{{ asset ('plugins/css/owl.css')  }}">
    <!--flexslider-->
    <link rel="stylesheet" href="{{ asset ('plugins/css/flexslider.min.css')  }}">
    <!-- selectize -->
    <link rel="stylesheet" href="{{ asset  ('plugins/css/selectize.css') }}">
    <link rel="stylesheet" href="{{ asset  ('plugins/css//selectize.bootstrap3.css') }}">
    <link rel="stylesheet" href="{{ asset  ('plugins/css/jquery-ui.min.css') }}">
    <!--dropdown -->
    <link rel="stylesheet" href="{{ asset ('plugins/css/bootstrap-dropdownhover.min.css') }}">
    <!-- mobile nav-->
    <link rel="stylesheet" href="{{ asset  ('plugins/css/meanmenu.css') }}">

    <!-- COUSTOM CSS link  -->
    <link rel="stylesheet" href="{{ asset ('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/responsive.css')  }}">

    <!--[if lt IE 9]>
    <script src="{{ asset('js/plagin-js/html5shiv.js') }}"></script>
    <script src="{{ asset('js/plagin-js/respond.min.js') }}"></script>
    <![endif]-->

</head>
<body>
@yield('header')

@yield('sidebar')

@yield('slider')

@yield('products')

@yield('product_detail')

@yield('cart')

@yield('footer')

<!--
|========================
|      Script
|========================
-->
<!-- jquery -->
<script src="{{ asset  ('plugins/js/jquery-1.11.3.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('plugins/js/bootstrap.min.js') }}"></script>
<!-- mean menu nav-->
<script src="{{ asset('plugins/js/meanmenu.js')  }}"></script>
<!-- ajaxchimp -->
<script src="{{ asset('plugins/js/jquery.ajaxchimp.min.js')  }}"></script>
<!-- wow -->
<script src="{{ asset('plugins/js/wow.min.js')  }}"></script>
<!-- Owl carousel-->
<script src="{{ asset('plugins/js/owl.carousel.js')  }}"></script>
<!--flexslider-->
<script src="{{ asset('plugins/js/jquery.flexslider-min.js')  }}"></script>
<!--dropdownhover-->
<script src="{{ asset('plugins/js/bootstrap-dropdownhover.min.js')  }}"></script>
<!--jquery-ui.min-->
<script src="{{ asset('plugins/js/jquery-ui.min.js')  }}"></script>
<!--validator -->
<script src="{{ asset('plugins/js/validator.min.js')  }}"></script>
<!--smooth scroll-->
<script src="{{ asset('plugins/js/smooth-scroll.js')  }}"></script>
<!-- Fancybox js-->
<script src="{{ asset('plugins/js/jquery.fancybox.min.js')  }}"></script>
<!-- SELECTIZE-->
<script src="{{ asset('plugins/js/standalone/selectize.js')  }}"></script>
<!-- init -->
<script src="{{ asset('js/init.js')  }}"></script>
</body>
</html>
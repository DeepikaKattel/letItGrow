<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Let IT Grow</title>
	<meta name="description" content="Let IT Grow">
	<meta name="author">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
<!-- Definity CSS -->
  	<link href="{{asset('css/zerogrid.css')}}" rel="stylesheet" media="all" type="text/css">
	<link href="{{asset('css/style.css')}}" rel="stylesheet" media="all" type="text/css">
	<link href="{{asset('css/menu.css')}}" rel="stylesheet" media="all" type="text/css">
	<!-- Lightbox -->
	<link href="{{asset('css/lightbox.css')}}" rel="stylesheet" media="all" type="text/css">
	<!-- Video Background -->
	<link href="{{asset('css/jquery.mb.ytplayer.min.css')}}" rel="stylesheet" media="all" type="text/css">
	<!-- Animate.css -->
	<link href="{{asset('css/animate.css')}}" rel="stylesheet" media="all" type="text/css">
	<link href="{{asset('css/networkAnimate.css')}}" rel="stylesheet" media="all" type="text/css">


	<!-- Custom Fonts -->
	<link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Owl Carousel Assets -->
    <link href="{{asset('owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('owl-carousel/owl.theme.css')}}" rel="stylesheet"> -->


    <link href="{{asset('css/quoteCarousel.css')}}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>

	<!-- JS -->
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>
<body id="page-top" class="sub-page">
<div class="wrap-body">
    @yield('content')
<!--////////////////////////////////////Footer-->
	@include('partials.footer')
	<div id="page-top"><a href="#page-top" class="button button-toTop f-right"><i class="fa fa-angle-double-up"></i></a></div>

	<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('js/menu.js')}}"></script>
    <script src="{{asset('js/jquery.localScroll.min.js')}}"></script>
    <script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
    <script src="{{asset('js/SmoothScroll.js')}}"></script>
    <script src="{{asset('js/wow.min.js')}}"></script>

    <!-- Owl Carousel JS -->
    <script src="{{asset('owl-carousel/owl.carousel.js')}}"></script>

    <!-- Google Map -->
    <script src="{{asset('js/google-map.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>


    <!-- Definity JS -->
    <script src="{{asset('js/main.js')}}"></script>

</div>
</body></html>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zMatcha - Free Html5 Templates</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
	<!-- Definity CSS -->
  	<link href="css/zerogrid.css" rel="stylesheet" media="all" type="text/css">
	<link href="css/style.css" rel="stylesheet" media="all" type="text/css">
	<link href="css/menu.css" rel="stylesheet" media="all" type="text/css">
	<!-- Lightbox -->
	<link href="css/lightbox.css" rel="stylesheet" media="all" type="text/css">
	<!-- Video Background -->
	<link href="css/jquery.mb.ytplayer.min.css" rel="stylesheet" media="all" type="text/css">
	<!-- Animate.css -->
	<link href="css/animate.css" rel="stylesheet" media="all" type="text/css">

	<!-- Custom Fonts -->
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Owl Carousel Assets -->
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->

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

	<!--////////////////////////////////////Header-->
	<header>
		<div class="wrap-header" >

			<!---Main Header--->
			<div class="main-header">
				<div class="bg-overlay">
					<!---Hero Content--->
					<div class="hero-content-wrapper">
					  <div class="hero-content">
						<h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">Something About Us</h4>
						<h1 class="hero-lead wow fadeInLeft" data-wow-duration="1.5s">About Us</h1>
					  </div>
					</div>
				</div>
			</div>

			@include('header')
		</div>
	</header>

	<!--////////////////////////////////////Container-->
	<section id="page-content">
		<div class="wrap-container zerogrid">
			<div class="crumbs">
				<ul>
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="single.html">About</a></li>
				</ul>
			</div>
			<div id="about-us">
				<article class="post-entry single-post">
					<div class="wrap-post">
						<div class="entry-header">
							<h1 class="entry-title">About The Company</h1>
						</div>

						<div class="entry-content">
							<div class="excerpt">
							<p>Let IT grow Pvt. Ltd. is a company growing in the field of information technology. The organization is a team of driven young and experienced minds that are passionate to provide utmost customer satisfaction in terms of product and service delivery.
                             The company mostly undertakes project-based business and primarily focuses on providing software-based services to its customers. However, it serves clients with system related services as well as other related needs. Apart from serving for commercial needs, Let IT grow also provides professional training to freshers/individuals and prepare them for the outer world exposure on the related field.
                            As the name suggests, we aim to maximize the market potential in IT by providing excellent products and services in the related field along with generating skillful manpower.</p>

					    </div>
				</article>
			</div>
		</div>
	</section>

	<!--////////////////////////////////////Footer-->
	@include('footer')

	<!-- ========== Scripts ========== -->
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/jquery.localScroll.min.js"></script>
	<script src="js/jquery.scrollTo.min.js"></script>
	<script src="js/SmoothScroll.js"></script>
	<script src="js/wow.min.js"></script>


	<!-- Google Map -->
	<script src="js/google-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>


	<!-- Definity JS -->
	<script src="js/main.js"></script>

</div>
</body></html>

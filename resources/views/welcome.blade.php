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
	<meta name="author" content="https://www.zerotheme.com">

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


	<!-- Custom Fonts -->
	<link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Owl Carousel Assets -->
    <link href="{{asset('owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('owl-carousel/owl.theme.css')}}" rel="stylesheet"> -->

     <script src="https://code.jquery.com/jquery-3.1.1.js"></script>


	<!-- JS -->

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg')}}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="{{asset('js/html5.js')}}"></script>
		<script src="{{asset('js/css3-mediaqueries.js')}}"></script>
	<![endif]-->

</head>
<body id="page-top">
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
						<h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">We build designs from your imagination</h4>
						<h1 class="hero-lead wow fadeInLeft" data-wow-duration="1.5s">Let IT Grow</h1>
						<a href="{{asset('single')}}" class="button button-skin wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">Read More</a>
					  </div>
					</div>
					<!---Scroller--->
					<div id="scroll-page-content">
						<a href="#page-content" class="scroller">
							<span class="scroller-text">scroll down</span>
							<div class="scroller-button">
								<i class="fa fa-angle-double-down"></i>
							</div>
						</a>
					</div>
				</div>
			</div>
			@include('header')
		</div>
	</header>


	<!--////////////////////////////////////Container-->
	<section id="page-content" class="index-page">
		<div class="wrap-container">
			<!-----------------content-box-1-------------------->
			<section class="content-box box-1">
				<div class="zerogrid">
					<div class="wrap-box"><!--Start Box-->
						<div class="header wow fadeInUp" data-wow-delay=".2s" data-wow-duration="1s">
							<h2>Our Aim</h2>
							<span class="intro">Lorem ipsum dolor sit amet consectetur adipisicing</span>
						</div>
						<div class="content">
							<div class="row">
								<div class="lg-1-3 wow fadeInLeft" data-wow-duration=".8s">
									<div class="ft-item">
										<div class="ft-icon">

										</div>
										<h5>20 Years Experience</h5>
										<p>Quae delectus cumque, tempore explicabo odit beatae! Nesciunt tempora cum consequuntur.</p>
									</div>
									<div class="ft-item">
										<div class="ft-icon">

										</div>
										<h5>License & Insurance</h5>
										<p>Quae delectus cumque, tempore explicabo odit beatae! Nesciunt tempora cum consequuntur.</p>
									</div>
									<div class="ft-item">
										<div class="ft-icon">

										</div>
										<h5>Excellent Services</h5>
										<p>Quae delectus cumque, tempore explicabo odit beatae! Nesciunt tempora cum consequuntur.</p>
									</div>
								</div>
								<div class="lg-1-3">
									<img src="{{asset('images/UK-Plant2.png')}}" alt="" class="ft-image-center wow fadeInUp has-tip" data-wow-delay=".1s" data-wow-duration="1s" data-tooltip aria-haspopup="true" data-disable-hover="false" tabindex="0" title="Services!"/>
								</div>
								<div class="lg-1-3 t-right-xs wow fadeInRight" data-wow-duration=".8s">
									<div class="ft-item">
										<div class="ft-icon">

										</div>
										<h5>Best Experts</h5>
										<p>Quae delectus cumque, tempore explicabo odit beatae! Nesciunt tempora cum consequuntur.</p>
									</div>
									<div class="ft-item">
										<div class="ft-icon">

										</div>
										<h5>Happy Customers</h5>
										<p>Quae delectus cumque, tempore explicabo odit beatae! Nesciunt tempora cum consequuntur.</p>
									</div>
									<div class="ft-item">
										<div class="ft-icon">

										</div>
										<h5>Accountable Firm</h5>
										<p>Quae delectus cumque, tempore explicabo odit beatae! Nesciunt tempora cum consequuntur.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-----------------content-box-2-------------------->
			<section class="content-box box-2 box-style-2">
				<div class="zerogrid">
					<div class="wrap-box"><!--Start Box-->
						<div class="content wow fadeInLeft" data-wow-delay=".1s" data-wow-duration="1s">
							<div class="row">
								<div class="sm-1-2 offset-sm-2-4">
									<blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista.</p></blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>



			<!-----------------content-box-4-------------------->
			<section class="content-box box-4" style="margin-bottom:100px">
				<div class="zerogrid-fluid">
					<div class="wrap-box">
						<div class="header wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
							<h2>Our Services</h2>
							<span class="intro">We help your business to step up a notch by making it tech-friendly</span>
						</div>
						<div class="content wow fadeIn" data-wow-delay=".1s" data-wow-duration="1s">
							<div class="row">
								<div class="lg-1-4 md-1-3 sm-1-2">
									<div class="portfolio-box zoom-effect">
										<img src="{{asset('images/mobileApplication.jpg')}}" class="img-responsive" alt="" style="height:325px">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													Mobile Application Development
												</div>

												<div class="project-button">
													<a href="{{asset('single')}}" class="button button-skin">Read More</a>
												</div>
											</div>
										</div>
										<div class="project-category" style="margin-left:20px">
                                            Mobile Application will assure you an increment in customer’s reach exponentially as your business will be easily accessible.
                                        </div>

									</div>
								</div>
								<div class="lg-1-4 md-1-3 sm-1-2">
									<div class="portfolio-box zoom-effect">
										<img src="{{asset('images/webDevelopment.jpg')}}" class="img-responsive" alt="" style="height:325px">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													Web Development
												</div>

												<div class="project-button">
													<a href="{{route('single')}}" class="button button-skin">Read More</a>
												</div>
											</div>
										</div>
										<div class="project-category" style="margin-left:20px">
                                            Your business can now use the digitalized platform in the form of Web Application, decreasing the resources required in an efficient manner.
                                        </div>
									</div>
								</div>
								<div class="lg-1-4 md-1-3 sm-1-2">
									<div class="portfolio-box zoom-effect">
										<img src="{{asset('images/hosting.jpg')}}" class="img-responsive" alt="" style="height:325px">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													Professional IT Training Services
												</div>
												<div class="project-button">
													<a href="{{route('single')}}" class="button button-skin">Read More</a>
												</div>
											</div>
										</div>
										<div class="project-category" style="margin-left:20px">
                                            IT handles are considered to be smarter in this century. Let IT Grow is the best platform for you to come and acquire professional skills.
                                        </div>
									</div>
								</div>
								<div class="lg-1-4 md-1-3 sm-1-2">
									<div class="portfolio-box zoom-effect">
										<img src="{{asset('images/webDesign.jpg')}}" class="img-responsive" alt="" style="height:325px;width:500px">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													Web Design
												</div>
												<div class="project-button">
													<a href="{{route('single')}}" class="button button-skin">Read More</a>
												</div>
											</div>
										</div>
										<div class="project-category" style="margin-left:20px">
                                            Web designing is very important for any web application. Designers are welcomed by Let IT Grow to showcase their skills and build a better future.
                                        </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>



			<!-----------------content-box-6-------------------->
			<section class="content-box box-6 box-style-3">
				<div class="zerogrid-fluid">
					<div class="wrap-box"><!--Start Box-->
						<div class="content wow fadeInLeft" data-wow-delay=".1s" data-wow-duration="1s">
							<div class="clients-logo">
								<div id="owl-brand" class="owl-carousel">
									<div class="item">
										<img src="{{asset('images/b1.png')}}" alt="">
									</div>
									<div class="item">
										<img src="{{asset('images/b2.png')}}" alt="">
									</div>
									<div class="item">
										<img src="{{asset('images/b3.png')}}" alt="">
									</div>
									<div class="item">
										<img src="{{asset('images/b4.png')}}" alt="">
									</div>
									<div class="item">
										<img src="{{asset('images/b5.png')}}" alt="">
									</div>
									<div class="item">
										<img src="{{asset('images/b6.png')}}" alt="">
									</div>
									<div class="item">
										<img src="{{asset('images/b7.png')}}" alt="">
									</div>
									<div class="item">
										<img src="{{asset('images/b8.png')}}" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-----------------content-box-7-------------------->
			<section class="content-box box-7">
				<div class="zerogrid-fluid">
					<div class="wrap-box"><!--Start Box-->
						<div class="content wow fadeInLeft" data-wow-delay=".1s" data-wow-duration="1s">
							<div class="row">
								<div class="md-1-3">
									<div class="wrap-col">
										<div class="row">
											<div class="sm-1-3">
												<i class="fa fa-map-marker"></i>
											</div>
											<div class="sm-2-3 t-left-sm">
												<h3>Address</h3>
												<p>123, New Lenox Chicago, IL 60606</p>
											</div>
										</div>
									</div>
								</div>
								<div class="md-1-3">
									<div class="wrap-col">
										<div class="row">
											<div class="sm-1-3">
												<i class="fa fa-phone"></i>
											</div>
											<div class="sm-2-3 t-left-sm">
												<h3>Phone</h3>
												<p>Carteret NJ 0708 (732) 803-01 03, (732) 806-01 04</p>
											</div>
										</div>
									</div>
								</div>
								<div class="md-1-3">
									<div class="wrap-col">
										<div class="row">
											<div class="sm-1-3">
												<i class="fa fa-envelope"></i>
											</div>
											<div class="sm-2-3 t-left-sm">
												<h3>Email</h3>
												<p><span>Email One :</span> info@yoursite.com </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</div>
	</section>

    @include('footer')
	<div id="page-top"><a href="#page-top" class="button button-toTop f-right"><i class="fa fa-angle-double-up"></i></a></div>

	<!-- ========== Scripts ========== -->
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

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>

</div>
</body>
</html>

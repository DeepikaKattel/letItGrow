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
	<link href="{{asset('css/treeAnimate.css')}}" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="{{asset('font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

	<!-- Owl Carousel Assets -->
    <link href="{{asset('owl-carousel/owl.carousel.css')}}" rel="stylesheet">
    <!-- <link href="{{asset('owl-carousel/owl.theme.css')}}" rel="stylesheet"> -->
     <script src="{{asset('networkAnimate.js')}}"></script>
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
                <canvas id=c></canvas>
			</div>

			<!---Top Menu--->
			<div id="cssmenu" >
				<ul>
				   <li class="active"><a href="{{url('/')}}"><span>zMatcha</span></a></li>
				   <li class="has-sub"><a href="#"><span>Category</span></a>
					  <ul>
						 <li class="has-sub"><a href="#"><span>Item 1</span></a>
							<ul>
							   <li><a href="#"><span>Sub Item</span></a></li>
							   <li class="last"><a href="#"><span>Sub Item</span></a></li>
							</ul>
						 </li>
						 <li class="has-sub"><a href="#"><span>Item 2</span></a>
							<ul>
							   <li><a href="#"><span>Sub Item</span></a></li>
							   <li class="last"><a href="#"><span>Sub Item</span></a></li>
							</ul>
						 </li>
					  </ul>
				   </li>
				   <li><a href="{{asset('archive.html')}}"><span>Archive</span></a></li>
				   <li><a href="{{asset('single')}}"><span>About</span></a></li>
				   <li class="last"><a href="{{asset('contact.html')}}"><span>Contact</span></a></li>
				   @if (Route::has('login'))
                       @auth
                           <li><a href="{{ url('/home') }}"><span>Home</span></a></li>
                       @else
                           <li><a href="{{ route('login') }}"><span>Login</span></a></li>

                           @if (Route::has('register'))
                               <li><a href="{{ route('register') }}">Register</a></li>
                           @endif
                       @endif

                   @endif
				</ul>
			</div>
		</div>
	</header>


	<!--////////////////////////////////////Container-->
	<section id="page-content" class="index-page">
		<div class="wrap-container">
			<!-----------------content-box-1-------------------->
			<section class="content-box box-1">
				<div class="zerogrid">
					<div class="wrap-box"><!--Start Box-->
						<div class="header wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
							<h2>Projects Gallery</h2>
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
									<img src="{{asset('images/UK-Plant2.png')}}" alt="" class="ft-image-center wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s" />
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
			<section class="content-box box-4">
				<div class="zerogrid-fluid">
					<div class="wrap-box">
						<div class="header wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
							<h2>Projects Gallery</h2>
							<span class="intro">Lorem ipsum dolor sit amet consectetur adipisicing</span>
						</div>
						<div class="content wow fadeIn" data-wow-delay=".1s" data-wow-duration="1s">
							<div class="row">
								<div class="lg-1-4 md-1-3 sm-1-2">
									<div class="portfolio-box zoom-effect">
										<img src="{{asset('images/12.jpg')}}" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													Project Name
												</div>
												<div class="project-category">
													Category
												</div>
												<div class="project-button">
													<a href="{{asset('single')}}" class="button button-skin">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="lg-1-4 md-1-3 sm-1-2">
									<div class="portfolio-box zoom-effect">
										<img src="{{asset('images/13.jpg')}}" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													Project Name
												</div>
												<div class="project-category">
													Category
												</div>
												<div class="project-button">
													<a href="{{route('single')}}" class="button button-skin">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="lg-1-4 md-1-3 sm-1-2">
									<div class="portfolio-box zoom-effect">
										<img src="{{asset('images/14.jpg')}}" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													Project Name
												</div>
												<div class="project-category">
													Category
												</div>
												<div class="project-button">
													<a href="{{route('single')}}" class="button button-skin">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="lg-1-4 md-1-3 sm-1-2">
									<div class="portfolio-box zoom-effect">
										<img src="{{asset('images/15.jpg')}}" class="img-responsive" alt="">
										<div class="portfolio-box-caption">
											<div class="portfolio-box-caption-content">
												<div class="project-name">
													Project Name
												</div>
												<div class="project-category">
													Category
												</div>
												<div class="project-button">
													<a href="{{route('single')}}" class="button button-skin">Read More</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<!-----------------content-box-5-------------------->
			<section class="content-box box-5">
				<div class="zerogrid">
					<div class="wrap-box"><!--Start Box-->
						<div class="header wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
							<h2>Latest News</h2>
							<span class="intro">Lorem ipsum dolor sit amet consectetur adipisicing</span>
						</div>
						<div class="content wow fadeInRight" data-wow-delay=".1s" data-wow-duration="1s">
							<div class="row">
								<div class="sm-1-3">
									<div class="wrap-col">
										<div class="box-entry">
											<div class="box-entry-inner">
												<img src="{{asset('images/1.jpg')}}" class="img-responsive"/>
												<div class="entry-details">
													<div class="entry-des">
														<span><a href="#">08th Apr 2017</a></span>
														<h3><a href="#">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h3>
														<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
														<a class="button button-skin" href="{{route('single')}}">Read More</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="sm-1-3">
									<div class="wrap-col">
										<div class="box-entry">
											<div class="box-entry-inner">
												<img src="{{asset('images/3.jpg')}}" class="img-responsive"/>
												<div class="entry-details">
													<div class="entry-des">
														<span><a href="#">08th Apr 2017</a></span>
														<h3><a href="#">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h3>
														<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
														<a class="button button-skin" href="{{route('single')}}">Read More</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="sm-1-3">
									<div class="wrap-col">
										<div class="box-entry">
											<div class="box-entry-inner">
												<img src="{{asset('images/4.jpg')}}" class="img-responsive"/>
												<div class="entry-details">
													<div class="entry-des">
														<span><a href="#">08th Apr 2017</a></span>
														<h3><a href="#">Make Ahead Super Green Vegan Quinoa Sandwich.</a></h3>
														<p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
														<a class="button button-skin" href="{{route('single')}}">Read More</a>
													</div>
												</div>
											</div>
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

	<!--////////////////////////////////////Footer-->
	<footer id="page-footer">
		<div class="zerogrid wrap-footer">
			<div class="row">
				<div class="sm-1-4 col-footer-1">
					<div class="wrap-col">
						<h3 class="widget-title">About Us</h3>
						<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
					</div>
				</div>
				<div class="sm-1-4 col-footer-2">
					<div class="wrap-col">
						<h3 class="widget-title">Recent Post</h3>
						<ul>
							<li><a href="#">MOST VISITED COUNTRIES</a></li>
							<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
							<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
							<li><a href="#">STARTUP COMPANY???S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
						</ul>
					</div>
				</div>
				<div class="sm-1-4 col-footer-3">
					<div class="wrap-col">
						<h3 class="widget-title">Tag Cloud</h3>
						<a href="#">animals</a>
						<a href="#">cooking</a>
						<a href="#">countries</a>
						<a href="#">city</a>
						<a href="#">children</a>
						<a href="#">home</a>
						<a href="#">likes</a>
						<a href="#">photo</a>
						<a href="#">link</a>
						<a href="#">law</a>
						<a href="#">shopping</a>
						<a href="#">skate</a>
						<a href="#">scholl</a>
						<a href="#">video</a>
						<a href="#">travel</a>
						<a href="#">images</a>
						<a href="#">love</a>
						<a href="#">lists</a>
						<a href="#">makeup</a>
						<a href="#">media</a>
						<a href="#">password</a>
						<a href="#">pagination</a>
						<a href="#">wildlife</a>
					</div>
				</div>
				<div class="sm-1-4 col-footer-4">
					<div class="wrap-col">
						<h3 class="widget-title">Gallery</h3>
						<div class="row">
							<div class="sm-1-3 xs-1-2">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('images/1.jpg')}}"></a>
								</div>
							</div>
							<div class="sm-1-3 xs-1-2">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('images/2.jpg')}}"></a>
								</div>
							</div>
							<div class="sm-1-3 xs-1-2">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('images/3.jpg')}}"></a>
								</div>
							</div>
							<div class="sm-1-3 xs-1-2">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('images/4.jpg')}}"></a>
								</div>
							</div>
							<div class="sm-1-3 xs-1-2">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('images/5.jpg')}}"></a>
								</div>
							</div>
							<div class="sm-1-3 xs-1-2">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('images/6.jpg')}}"></a>
								</div>
							</div>
							<div class="sm-1-3 xs-1-2">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('images/7.jpg')}}"></a>
								</div>
							</div>
							<div class="sm-1-3 xs-1-2">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('images/8.jpg')}}"></a>
								</div>
							</div>
							<div class="sm-1-3 xs-1-2">
								<div class="wrap-col">
									<a href="#"><img src="{{asset('images/1.jpg')}}"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="zerogrid bottom-footer">
			<div class="row">
				<div class="bottom-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-instagram"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-pinterest"></i></a>
					<a href="#"><i class="fa fa-vimeo"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-youtube"></i></a>
				</div>
			</div>
			<div class="copyright">
				Copyright @ - <a href="https://www.zerotheme.com/free-website-templates" rel='nofollow'>Website Templates</a> by <a href="https://www.zerotheme.com">Zerotheme</a>
			</div>
		</div>
	</footer>
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
	var w = c.width = window.innerWidth,
        h = c.height = window.innerHeight,
        ctx = c.getContext( '2d' ),

        opts = {

            range: 180,
            baseConnections: 3,
            addedConnections: 5,
            baseSize: 5,
            minSize: 1,
            dataToConnectionSize: .4,
            sizeMultiplier: .7,
            allowedDist: 40,
            baseDist: 40,
            addedDist: 30,
            connectionAttempts: 100,

            dataToConnections: 1,
            baseSpeed: .04,
            addedSpeed: .05,
            baseGlowSpeed: .4,
            addedGlowSpeed: .4,

            rotVelX: .003,
            rotVelY: .002,

            repaintColor: '#000',
            connectionColor: 'hsla(200,60%,light%,alp)',
            rootColor: 'hsla(0,60%,light%,alp)',
            endColor: 'hsla(160,20%,light%,alp)',
            dataColor: 'hsla(40,80%,light%,alp)',

            wireframeWidth: .1,
            wireframeColor: '#88f',

            depth: 250,
            focalLength: 250,
            vanishPoint: {
                x: w / 2,
                y: h / 2
            }
        },

        squareRange = opts.range * opts.range,
        squareAllowed = opts.allowedDist * opts.allowedDist,
        mostDistant = opts.depth + opts.range,
        sinX = sinY = 0,
        cosX = cosY = 0,

        connections = [],
        toDevelop = [],
        data = [],
        all = [],
        tick = 0,
        totalProb = 0,

        animating = false,

        Tau = Math.PI * 2;

    ctx.fillStyle = '#000';
    ctx.fillRect( 0, 0, w, h );
    ctx.fillStyle = '#ccc';
    ctx.font = '50px Verdana';
    ctx.fillText( 'Calculating Nodes', w / 2 - ctx.measureText( 'Calculating Nodes' ).width / 2, h / 2 - 15 );

    window.setTimeout( init, 4 ); // to render the loading screen

    function init(){

        connections.length = 0;
        data.length = 0;
        all.length = 0;
        toDevelop.length = 0;

        var connection = new Connection( 0, 0, 0, opts.baseSize );
        connection.step = Connection.rootStep;
        connections.push( connection );
        all.push( connection );
        connection.link();

        while( toDevelop.length > 0 ){

            toDevelop[ 0 ].link();
            toDevelop.shift();
        }

        if( !animating ){
            animating = true;
            anim();
        }
    }
    function Connection( x, y, z, size ){

        this.x = x;
        this.y = y;
        this.z = z;
        this.size = size;

        this.screen = {};

        this.links = [];
        this.probabilities = [];
        this.isEnd = false;

        this.glowSpeed = opts.baseGlowSpeed + opts.addedGlowSpeed * Math.random();
    }
    Connection.prototype.link = function(){

        if( this.size < opts.minSize )
            return this.isEnd = true;

        var links = [],
            connectionsNum = opts.baseConnections + Math.random() * opts.addedConnections |0,
            attempt = opts.connectionAttempts,

            alpha, beta, len,
            cosA, sinA, cosB, sinB,
            pos = {},
            passedExisting, passedBuffered;

        while( links.length < connectionsNum && --attempt > 0 ){

            alpha = Math.random() * Math.PI;
            beta = Math.random() * Tau;
            len = opts.baseDist + opts.addedDist * Math.random();

            cosA = Math.cos( alpha );
            sinA = Math.sin( alpha );
            cosB = Math.cos( beta );
            sinB = Math.sin( beta );

            pos.x = this.x + len * cosA * sinB;
            pos.y = this.y + len * sinA * sinB;
            pos.z = this.z + len *        cosB;

            if( pos.x*pos.x + pos.y*pos.y + pos.z*pos.z < squareRange ){

                passedExisting = true;
                passedBuffered = true;
                for( var i = 0; i < connections.length; ++i )
                    if( squareDist( pos, connections[ i ] ) < squareAllowed )
                        passedExisting = false;

                if( passedExisting )
                    for( var i = 0; i < links.length; ++i )
                        if( squareDist( pos, links[ i ] ) < squareAllowed )
                            passedBuffered = false;

                if( passedExisting && passedBuffered )
                    links.push( { x: pos.x, y: pos.y, z: pos.z } );

            }

        }

        if( links.length === 0 )
            this.isEnd = true;
        else {
            for( var i = 0; i < links.length; ++i ){

                var pos = links[ i ],
                    connection = new Connection( pos.x, pos.y, pos.z, this.size * opts.sizeMultiplier );

                this.links[ i ] = connection;
                all.push( connection );
                connections.push( connection );
            }
            for( var i = 0; i < this.links.length; ++i )
                toDevelop.push( this.links[ i ] );
        }
    }
    Connection.prototype.step = function(){

        this.setScreen();
        this.screen.color = ( this.isEnd ? opts.endColor : opts.connectionColor ).replace( 'light', 30 + ( ( tick * this.glowSpeed ) % 30 ) ).replace( 'alp', .2 + ( 1 - this.screen.z / mostDistant ) * .8 );

        for( var i = 0; i < this.links.length; ++i ){
            ctx.moveTo( this.screen.x, this.screen.y );
            ctx.lineTo( this.links[ i ].screen.x, this.links[ i ].screen.y );
        }
    }
    Connection.rootStep = function(){
        this.setScreen();
        this.screen.color = opts.rootColor.replace( 'light', 30 + ( ( tick * this.glowSpeed ) % 30 ) ).replace( 'alp', ( 1 - this.screen.z / mostDistant ) * .8 );

        for( var i = 0; i < this.links.length; ++i ){
            ctx.moveTo( this.screen.x, this.screen.y );
            ctx.lineTo( this.links[ i ].screen.x, this.links[ i ].screen.y );
        }
    }
    Connection.prototype.draw = function(){
        ctx.fillStyle = this.screen.color;
        ctx.beginPath();
        ctx.arc( this.screen.x, this.screen.y, this.screen.scale * this.size, 0, Tau );
        ctx.fill();
    }
    function Data( connection ){

        this.glowSpeed = opts.baseGlowSpeed + opts.addedGlowSpeed * Math.random();
        this.speed = opts.baseSpeed + opts.addedSpeed * Math.random();

        this.screen = {};

        this.setConnection( connection );
    }
    Data.prototype.reset = function(){

        this.setConnection( connections[ 0 ] );
        this.ended = 2;
    }
    Data.prototype.step = function(){

        this.proportion += this.speed;

        if( this.proportion < 1 ){
            this.x = this.ox + this.dx * this.proportion;
            this.y = this.oy + this.dy * this.proportion;
            this.z = this.oz + this.dz * this.proportion;
            this.size = ( this.os + this.ds * this.proportion ) * opts.dataToConnectionSize;
        } else
            this.setConnection( this.nextConnection );

        this.screen.lastX = this.screen.x;
        this.screen.lastY = this.screen.y;
        this.setScreen();
        this.screen.color = opts.dataColor.replace( 'light', 40 + ( ( tick * this.glowSpeed ) % 50 ) ).replace( 'alp', .2 + ( 1 - this.screen.z / mostDistant ) * .6 );

    }
    Data.prototype.draw = function(){

        if( this.ended )
            return --this.ended; // not sre why the thing lasts 2 frames, but it does

        ctx.beginPath();
        ctx.strokeStyle = this.screen.color;
        ctx.lineWidth = this.size * this.screen.scale;
        ctx.moveTo( this.screen.lastX, this.screen.lastY );
        ctx.lineTo( this.screen.x, this.screen.y );
        ctx.stroke();
    }
    Data.prototype.setConnection = function( connection ){

        if( connection.isEnd )
            this.reset();

        else {

            this.connection = connection;
            this.nextConnection = connection.links[ connection.links.length * Math.random() |0 ];

            this.ox = connection.x; // original coordinates
            this.oy = connection.y;
            this.oz = connection.z;
            this.os = connection.size; // base size

            this.nx = this.nextConnection.x; // new
            this.ny = this.nextConnection.y;
            this.nz = this.nextConnection.z;
            this.ns = this.nextConnection.size;

            this.dx = this.nx - this.ox; // delta
            this.dy = this.ny - this.oy;
            this.dz = this.nz - this.oz;
            this.ds = this.ns - this.os;

            this.proportion = 0;
        }
    }
    Connection.prototype.setScreen = Data.prototype.setScreen = function(){

        var x = this.x,
            y = this.y,
            z = this.z;

        // apply rotation on X axis
        var Y = y;
        y = y * cosX - z * sinX;
        z = z * cosX + Y * sinX;

        // rot on Y
        var Z = z;
        z = z * cosY - x * sinY;
        x = x * cosY + Z * sinY;

        this.screen.z = z;

        // translate on Z
        z += opts.depth;

        this.screen.scale = opts.focalLength / z;
        this.screen.x = opts.vanishPoint.x + x * this.screen.scale;
        this.screen.y = opts.vanishPoint.y + y * this.screen.scale;

    }
    function squareDist( a, b ){

        var x = b.x - a.x,
            y = b.y - a.y,
            z = b.z - a.z;

        return x*x + y*y + z*z;
    }

    function anim(){

        window.requestAnimationFrame( anim );

        ctx.globalCompositeOperation = 'source-over';
        ctx.fillStyle = opts.repaintColor;
        ctx.fillRect( 0, 0, w, h );

        ++tick;

        var rotX = tick * opts.rotVelX,
            rotY = tick * opts.rotVelY;

        cosX = Math.cos( rotX );
        sinX = Math.sin( rotX );
        cosY = Math.cos( rotY );
        sinY = Math.sin( rotY );

        if( data.length < connections.length * opts.dataToConnections ){
            var datum = new Data( connections[ 0 ] );
            data.push( datum );
            all.push( datum );
        }

        ctx.globalCompositeOperation = 'lighter';
        ctx.beginPath();
        ctx.lineWidth = opts.wireframeWidth;
        ctx.strokeStyle = opts.wireframeColor;
        all.map( function( item ){ item.step(); } );
        ctx.stroke();
        ctx.globalCompositeOperation = 'source-over';
        all.sort( function( a, b ){ return b.screen.z - a.screen.z } );
        all.map( function( item ){ item.draw(); } );

        /*ctx.beginPath();
        ctx.strokeStyle = 'red';
        ctx.arc( opts.vanishPoint.x, opts.vanishPoint.y, opts.range * opts.focalLength / opts.depth, 0, Tau );
        ctx.stroke();*/
    }

    window.addEventListener( 'resize', function(){

        opts.vanishPoint.x = ( w = c.width = window.innerWidth ) / 2;
        opts.vanishPoint.y = ( h = c.height = window.innerHeight ) / 2;
        ctx.fillRect( 0, 0, w, h );
    });
    window.addEventListener( 'click', init );


</script>

</div>
</body>
</html>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Let IT Grow | It Services</title>
	<meta name="description" content="Let IT Grow">
	<meta name="author" content="https://www.letitgrownepal.com">

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
    <link href="{{asset('css/robot.css')}}" rel="stylesheet" media="all" type="text/css">
	<link href="{{asset('css/networkAnimate.css')}}" rel="stylesheet" media="all" type="text/css">
    <link href="{{asset('css/wave.css')}}" rel="stylesheet" media="all" type="text/css">


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
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg')}}" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="{{asset('js/html5.js')}}"></script>
		<script src="{{asset('js/css3-mediaqueries.js')}}"></script>
	<![endif]-->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.js"> </script> 
    <link rel="stylesheet" type="text/css"  href="/css/result-light.css"> 
    
    <script type="text/javascript" src= "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 
    <link rel="stylesheet"type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> 
    <link rel="stylesheet"type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> 
    <!-- JavaScript for adding slider for multiple images shown at once-->  
 
    
    <script type="text/javascript"> 
        $(window).load(function() { 
            $(".carousel .item").each(function() { 
                var i = $(this).next(); 
                i.length || (i = $(this).siblings(":first")), 
                  i.children(":first-child").clone().appendTo($(this)); 
                
                for (var n = 0; n < 1; n++)(i = i.next()).length || 
                  (i = $(this).siblings(":first")), 
                  i.children(":first-child").clone().appendTo($(this)) 
            }) 
        }); 
    </script> 
</head>
<body id="page-top" style="color:grey">
    <div class="wrap-body">
        <!--////////////////////////////////////Header-->
        <header>
                <!---Main Header--->
                <div class="main-header">
                    <div class="bg-overlay">
                        <!---Hero Content--->
                        <div class="hero-content-wrapper">
                        <div class="hero-content">
                            <!-- <h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s" >We build designs from your imagination</h4> -->
                            
                            <!-- <img src="{{asset('images/logo.png')}}"class="wow fadeIn"style="height:200px;width:500px;box-shadow:2px 2px 2px 2px"/> -->
                            <h1 class="hero-lead wow fadeInLeft" data-wow-duration="1.5s" style="text-shadow:4px 5px black;color:#4c6792"> <canvas id="myCanvas" style="margin-top:0px"></canvas>Let <span style="color:rgba(40,215,226)">IT</span>Grow</h1>
                            
                            <!-- <a href="{{asset('about')}}" class="button button-skin wow fadeIn" data-wow-duration="2s" data-wow-delay="1s">Read More</a> -->
                        </div>
                        </div>
                        <!-- <canvas id="c"></canvas> -->
                        <div class="container">
                        <div class="robot">
                            <div class="head">
                            <div class="eyes">
                                <div class="left-eye"></div>
                                <div class="right-eye"></div>
                            </div>
                            </div>
                            <div class="body">
                            <div class="left-arm"></div>
                            <div class="torso"></div>
                            <div class="right-arm"></div>
                            </div>
                            <div class="legs">
                            <div class="left-leg"></div>
                            <div class="right-leg"></div>
                            </div>
                        </div>
                        </div>          
                        
                    </div>
                    <div class="wave">                           
                    </div>
                    <!---Scroller--->                    
                    <div id="scroll-page-content">
                        <a href="#menu" class="scroller">
                            <span class="scroller-text">scroll down</span>
                            <div class="scroller-button">
                                <i class="fa fa-angle-double-down"></i>
                            </div>
                        </a>
                    </div>                     

               
            </div>            
        </header>
        <div class="menu" id="menu">
            @include('partials.header')
        </div>
    </div>


	<!--////////////////////////////////////Container-->
	<section id="page-content" class="index-page">
		<div class="wrap-container">
			<!-----------------content-box-4-------------------->
			<section class="content-box box-4" style="margin-bottom:100px">
				<div class="zerogrid-fluid">
					<div class="wrap-box">
						<div class="header wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
							<h2>Our Services</h2>
							<span class="intro">We help your business to step up a notch by making it tech-friendly</span>
						</div>
                        <div class="content wow fadeIn" data-wow-delay=".1s" data-wow-duration="1s">
                            <!-- bootstrap card with row name myCarousel as row 1-->
                            <div class="carousel slide" id="myCarousel"> 
                                <div class="carousel-inner"> 
                                    <div class="item active"> 
                                        <div class="lg-1-4 md-1-3 sm-1-2" style="margin-left:80px">
                                            <div class="portfolio-box zoom-effect">
                                                <img src="{{asset('images/mobileApplication.jpg')}}" class="img-responsive" alt="" style="height:325px">
                                                <div class="portfolio-box-caption">
                                                    <div class="portfolio-box-caption-content">
                                                        <div class="project-name">
                                                            Mobile Application Development
                                                        </div>

                                                        <div class="project-button">
                                                            <a href="{{asset('about')}}" class="button button-skin">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>										
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="item"> 
                                        <div class="lg-1-4 md-1-3 sm-1-2" style="margin-left:80px">
                                            <div class="portfolio-box zoom-effect">
                                                <img src="{{asset('images/webDevelopment.jpg')}}" class="img-responsive" alt="" style="height:325px">
                                                <div class="portfolio-box-caption">
                                                    <div class="portfolio-box-caption-content">
                                                        <div class="project-name">
                                                            Web Development
                                                        </div>

                                                        <div class="project-button">
                                                            <a href="{{route('about')}}" class="button button-skin">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>										
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="item"> 
                                        <div class="lg-1-4 md-1-3 sm-1-2" style="margin-left:80px">
                                            <div class="portfolio-box zoom-effect">
                                                <img src="{{asset('images/webDesign.jpg')}}" class="img-responsive" alt="" style="height:325px;width:500px">
                                                <div class="portfolio-box-caption">
                                                    <div class="portfolio-box-caption-content">
                                                        <div class="project-name">
                                                            Web Design
                                                        </div>
                                                        <div class="project-button">
                                                            <a href="{{route('about')}}" class="button button-skin">Read More</a>
                                                        </div>
                                                    </div>
                                                </div>                                                
                                            </div> 
                                        </div>                                      
                                    </div> 
                                </div>
                                 <a class="left carousel-control"
                                        href="#myCarousel"
                                        data-slide="prev"> 
                            <i class="glyphicon glyphicon-chevron-left"> 
                            </i> 
                            </a> 
                                <a class="right carousel-control" 
                                href="#myCarousel" 
                                data-slide="next"> 
                                <i class="glyphicon glyphicon-chevron-right"> 
                                </i> 
                            </a> 
                    
                            </div> 
                        </div> 						
					</div>
				</div>
			</section>



			<!-----------------content-box-6-------------------->
			<section class="content-box box-6 box-style-3">
				<div class="zerogrid-fluid">
					<div class="wrap-box"><!--Start Box-->
                    <div class="container"> 
                        <!--Bootstrap card with slider class-->
                        <div id="carousel-demo" 
                            class="carousel slide" 
                            data-ride="carousel"> 
                            <div class="carousel-inner"> 
                                <div class="item"> 
                                    <img src= "https://media.geeksforgeeks.org/wp-content/uploads/20190709143850/1382.png"> 
                                </div>                               
                            </div> 
                            <!--slider control for card-->
                            <a class="left carousel-control"
                            href="#carousel-demo"
                            data-slide="prev"> 
                                <span class="glyphicon glyphicon-chevron-left"> 
                            </span> 
                            </a> 
                            <a class="right carousel-control" 
                            href="#carousel-demo" 
                            data-slide="next"> 
                                <span class="glyphicon glyphicon-chevron-right"> 
                            </span> 
                            </a> 
                        </div> 
                    </div> 
						<!-- <div class="content wow fadeInLeft" data-wow-delay=".1s" data-wow-duration="1s">
							<div class="clients-logo">
								<div id="owl-brand" class="owl-carousel">
									<div class="item" style="padding-left:10px">
                                        <div class="card col-md-3 col-11">
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <div class="profile mb-4 mt-3"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg"> </div>
                                                    <div class="card-subtitle">
                                                        <p style="color:white"> <small class="text-muted"><i class="fa fa-quote-left" style="margin-right:5px"></i>I expected anything less than perfect for the team of experts. They are the best team ever! <i class="fa fa-quote-left fa-flip-horizontal" style="margin-left:5px"></i> </small> </p>
                                                        <p style="color:white">-CEO</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item" style="padding-left:10px">
                                        <div class="card col-md-3 col-11">
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <div class="profile mb-4 mt-3"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg"> </div>
                                                    <div class="card-subtitle">
                                                        <p style="color:white"> <small class="text-muted"><i class="fa fa-quote-left" style="margin-right:5px"></i>I expected anything less than perfect for the team of experts. They are the best team ever! <i class="fa fa-quote-left fa-flip-horizontal" style="margin-left:5px"></i> </small> </p>
                                                        <p style="color:white">-CEO</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item" style="padding-left:10px">
                                        <div class="card col-md-3 col-11">
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <div class="profile mb-4 mt-3"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg"> </div>
                                                    <div class="card-subtitle">
                                                        <p style="color:white"> <small class="text-muted"><i class="fa fa-quote-left" style="margin-right:5px"></i>I expected anything less than perfect for the team of experts. They are the best team ever! <i class="fa fa-quote-left fa-flip-horizontal" style="margin-left:5px"></i> </small> </p>
                                                        <p style="color:white">-CEO</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item" style="padding-left:10px">
                                        <div class="card col-md-3 col-11">
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <div class="profile mb-4 mt-3"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg"> </div>
                                                    <div class="card-subtitle">
                                                        <p style="color:white"> <small class="text-muted"><i class="fa fa-quote-left" style="margin-right:5px"></i>I expected anything less than perfect for the team of experts. They are the best team ever! <i class="fa fa-quote-left fa-flip-horizontal" style="margin-left:5px"></i> </small> </p>
                                                        <p style="color:white">-CEO</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="item" style="padding-left:10px">
                                        <div class="card col-md-3 col-11">
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <div class="profile mb-4 mt-3"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg"> </div>
                                                    <div class="card-subtitle">
                                                        <p style="color:white"> <small class="text-muted"><i class="fa fa-quote-left" style="margin-right:5px"></i>I expected anything less than perfect for the team of experts. They are the best team ever! <i class="fa fa-quote-left fa-flip-horizontal" style="margin-left:5px"></i> </small> </p>
                                                        <p style="color:white">-CEO</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item" style="padding-left:10px">
                                        <div class="card col-md-3 col-11">
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <div class="profile mb-4 mt-3"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg"> </div>
                                                    <div class="card-subtitle">
                                                        <p style="color:white"> <small class="text-muted"><i class="fa fa-quote-left" style="margin-right:5px"></i>I expected anything less than perfect for the team of experts. They are the best team ever! <i class="fa fa-quote-left fa-flip-horizontal" style="margin-left:5px"></i> </small> </p>
                                                        <p style="color:white">-CEO</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item" style="padding-left:10px">
                                        <div class="card col-md-3 col-11">
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <div class="profile mb-4 mt-3"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg"> </div>
                                                    <div class="card-subtitle">
                                                        <p style="color:white"> <small class="text-muted"><i class="fa fa-quote-left" style="margin-right:5px"></i>I expected anything less than perfect for the team of experts. They are the best team ever! <i class="fa fa-quote-left fa-flip-horizontal" style="margin-left:5px"></i> </small> </p>
                                                        <p style="color:white">-CEO</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item" style="padding-left:10px">
                                        <div class="card col-md-3 col-11">
                                            <div class="card-content">
                                                <div class="card-body p-0">
                                                    <div class="profile mb-4 mt-3"> <img src="https://res.cloudinary.com/dxfq3iotg/image/upload/v1574583336/AAA/4.jpg"> </div>
                                                    <div class="card-subtitle">
                                                        <p style="color:white"> <small class="text-muted"><i class="fa fa-quote-left" style="margin-right:5px"></i>I expected anything less than perfect for the team of experts. They are the best team ever! <i class="fa fa-quote-left fa-flip-horizontal" style="margin-left:5px"></i> </small> </p>
                                                        <p style="color:white">-CEO</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
							</div>
						</div> -->
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
												<p>Pulchowk, Lalitpur</p>
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
												<p>01-5901614</p>
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
												<p><span>Email One :</span> info@letitgrownepal.com </p>
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

    @include('partials.footer')
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
    $(document).ready(function () {
        $('div.main-header').click(function() {
            $('html, body').animate({
                scrollTop: $("div.menu").offset().top
            }, 1000)
        }),  
    });
</script>
</div>
</body>
</html>

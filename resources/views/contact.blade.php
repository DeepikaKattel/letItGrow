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
						<h4 class="h-alt hero-subheading wow fadeIn" data-wow-duration="2s" data-wow-delay=".7s">Leave us a message</h4>
						<h1 class="hero-lead wow fadeInLeft" data-wow-duration="1.5s">Contact us</h1>
					  </div>
					</div>
				</div>
			</div>

			<!---Top Menu--->
			@include('header')

		</div>
	</header>



	<!--////////////////////////////////////Container-->
	<section id="page-content">
		<div class="wrap-container zerogrid">
			<div class="crumbs">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div id="contact-area">
				<h1 class="">Contact Us</h1>
				<div class="contact-map_wrapper wow fadeIn" data-wow-delay=".1s" data-wow-duration="1.5s">
					<!-- Map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.096909160508!2d85.31605341458263!3d27.683399533151924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19f1a12ed15f%3A0xd2addf7cee6a8e0b!2sLet%20IT%20Grow!5e0!3m2!1sen!2snp!4v1605081029408!5m2!1sen!2snp" width="1170" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

					<!-- Show Info Button -->
					<div class="show-info-link">
					  <a href="#" class="show-info"><i class="fa fa-info"></i>Show info</a>
					</div>
					<div class="zerogrid">
						<!-- Address Info -->
						<div class="xs-5-6 offset-md-1-6 md-1-2 contact-info-wrapper">
							<address>
								<div class="row">
								  <!-- Phone -->
								  <div class="sm-1-2 address-group">
									<span>Phone</span>
									<a href="#">+ 01-5901614</a>
								  </div>
								  <!-- Address -->
								  <div class="sm-1-2 address-group">
									<span>Address</span>
									<p>Pulchowk, Lalitpur</p>
								  </div>
								</div>
								<div class="row">
								  <!-- Email -->
								  <div class="sm-1-2 address-group">
									<span>Email</span>
									<a href="mailto:sayhello@email.com">info@letitgrownepal.com </a>
								  </div>
								  <!-- Hours -->
								  <div class="sm-1-2 address-group">
									<span>Open Hours</span>
									<p>Sun-Fri: 10am-5pm</p>
								  </div>
								</div>
								<!-- Show Map Button -->
								<div class="row show-map-link">
								  <a href="#" class="show-map"><i class="fa fa-map-o"></i> Show on map</a>
								</div>
							</address>
						</div>
					</div>
				</div>
				<div class="contact-main_wrapper">
					<div class="row">
						<div class="sm-2-5 ">
							<div class="wrap-col">
								<div class="wow fadeInLeft" data-wow-delay=".1s" data-wow-duration="1s">
									<h3>Have any questions? Let's get in touch!</h3>
									<p>Contact us if your are interested.</p>
								</div>
							</div>
						</div>
						<div class="sm-2-5 offset-sm-1-5">
							<div class="wrap-col">
								<div id="contact_form" class="wow fadeInUp" data-wow-delay=".1s" data-wow-duration="1s">
                                    @if (\Illuminate\Support\Facades\Session::has('error'))
                                        <div class="alert alert-danger" style="background-color:red;color:white">
                                            {!! session('error') !!}
                                        </div>
                                    @endif
                                    @if (\Illuminate\Support\Facades\Session::has('success'))
                                        <div class="alert alert-success" style="background-color:green;color:white">
                                            {!! session('success') !!}
                                        </div>
                                    @endif
									<div id="contact_results"></div>
									<div id="contact_body">
                                        <form action="{{route('contact.store')}}" method="post" >
                                        @csrf
                                            <label>
                                                <input type="text" name="name" id="name" required="true" placeholder="Your Name"/>
                                            </label>
                                            <label>
                                                <input type="email" name="email" required="true" placeholder="Your Email"/>
                                            </label>
                                            <label for="field5">
                                                <textarea name="message" id="message" class="textarea-field" required="true" placeholder="Message"></textarea>
                                            </label>

                                            <label>Upload your CV:
                                                <input type="file" name="cv" id="cv"/>
                                            </label>
                                            <label>
                                                <button class="button button-skin" type="submit" id="submit_btn">Submit</button>
                                            </label>
                                        </form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
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

	<script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() {

	    var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields
		$("#contact_form input[required=true], #contact_form textarea[required=true]").each(function(){
			$(this).css('border-color','');
			if(!$.trim($(this).val())){ //if this field is empty
				$(this).css('border-color','red'); //change border color to red
				proceed = false; //set do not proceed flag
			}
			//check invalid email
			var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
			if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
				$(this).css('border-color','red'); //change border color to red
				proceed = false; //set do not proceed flag
			}
		});

        if(proceed) //everything looks good! proceed...
        {
			//get input field values data to be sent to server
            post_data = {
				'user_name'		: $('input[name=name]').val(),
				'user_email'	: $('input[name=email]').val(),
				'msg'			: $('textarea[name=message]').val(),
				'cv'			: $('input[name=cv]').val()
			};

            //Ajax post data to server
            $.post('contact.php', post_data, function(response){
				if(response.type == 'error'){ //load json data from server and output message
					output = '<div class="error">'+response.text+'</div>';
				}else{
				    output = '<div class="success">'+response.text+'</div>';
					//reset values in all input fields
					$("#contact_form  input[required=true], #contact_form textarea[required=true]").val('');
					$("#contact_form #contact_body").slideUp(); //hide form after success
				}
				$("#contact_form #contact_results").hide().html(output).slideDown();
            }, 'json');
        }
    });

    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form  input[required=true], #contact_form textarea[required=true]").keyup(function() {
        $(this).css('border-color','');
        $("#result").slideUp();
    });
});
</script>
	<!-- Definity JS -->
	<script src="js/main.js"></script>

</div>
</body></html>

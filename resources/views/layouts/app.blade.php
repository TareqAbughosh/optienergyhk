<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Opti Energy</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="format-detection" content="telephone=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/animations.css">
	<link rel="stylesheet" href="/css/font-awesome5.css">
	<link rel="stylesheet" href="/css/icomoon.css">
	<link rel="stylesheet" href="/css/main.css" class="color-switcher-link">
	<link rel="stylesheet" href="/css/shop.css" class="color-switcher-link">
	<style>
        /* Custom CSS */
        .smaller-container {
            max-width: 80%; /* Adjust the maximum width as needed */
            margin: 0 auto; /* Center the container horizontally */
            text-align: left; /* Align text to the left */
        }

        .smaller-heading {
            font-size: 24px; /* Adjust the font size as needed */
        }
    </style>
	<script src="/js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>
	<div id="team-form" class="ds modal">
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="form-wrapper ls rounded">
						<form class="contact-form" method="post" action="/">
							<div class="row c-mb-20">
								<div class="col-12 form-title text-center form-builder-item">
									<div class="header title">
										<h4><span class="thin">Contact</span> me</h4>
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="name333">Full Name <span class="required">*</span></label>
										<input type="text" aria-required="true" size="30" value="" name="name" id="name333" class="form-control" placeholder="Your name">
									</div>
								</div>
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="phone35533">Email address<span class="required">*</span></label>
										<input type="tel" aria-required="true" size="30" name="phone" id="phone35533" class="form-control" placeholder="Phone Number">
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12">
									<div class="form-group has-placeholder">
										<label for="message333">Message</label>
										<textarea aria-required="true" rows="3" cols="45" name="message" id="message333" class="form-control" placeholder="Message"></textarea>
									</div>
								</div>
							</div>
							<div class="row c-mb-20">
								<div class="col-sm-12 mb-0 mt-10 text-center">
									<div class="form-group">
										<input class="btn btn-gradient" type="submit" value="Contact me">
									</div>
								</div>
							</div>
						</form>
					</div>

				</div>
			</div>


		</div>


	</div>


	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div><!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->

			<!--topline section visible only on small screens|-->

			<div class="header_absolute">
				<!--eof topline-->
				<!-- header with two Bootstrap columns - left for logo and right for navigation -->
				<header class="page_header_side header_slide header-special header_side_right ds">

					<div class="scrollbar-macosx">
						<div class="side_header_inner">
							<p class="text-right mb-0 close-wrapper"><a href="javascript:void(0)">×</a></p>
							<div class="widget widget_about">
								<h3 class="widget-title">About</h3>
								<p>
									Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde.
								</p>
							</div>
							<div class="widget widget_mailchimp">
								<h3 class="widget-title">Newsletter</h3>

								<form class="signup" action="/">
									<label for="mailchimp_email88d">
										<span class="screen-reader-text">Subscribe:</span>
									</label>
									<input id="mailchimp_email88d" name="email" type="email" class="form-control mailchimp_email has-placeholder" placeholder="Email">
									<button type="submit" class="search-submit">
										<span class="screen-reader-text">Subscribe</span>
									</button>
									<div class="response"></div>
								</form>
							</div>
							<div class="widget widget_social_icons">
								<a href="https://www.linkedin.com/company/opti-energydmcc" class="fab fa-linkedin-in rounded-icon bg-icon fs-16" title="linkedin"></a>
							</div>
						</div>
					</div>
				</header>

				<header class="{{Route::current()->getName() == 'welcome' ? 'page_header header-1 ds bg-transparent s-py-xl-20 s-py-10' : 'page_header header-1 ds bg-transparent s-overlay s-py-10'}}">

					<div class="container-fluid">

						<div class="row d-flex align-items-center justify-content-center">
							<div class="col-xl-3 col-md-4 col-12 text-center">
								<a href="/" class="logo">
									<img src="/images/logo.png" alt="">
									<span class="d-flex flex-column">
										<span class="logo-text color-darkgrey"><strong>Opti Energy</strong></span>
										<span class="logo-subtext"> Powering the Future.</span>
									</span>
								</a>
							</div>
							<div class="col-xl-6 col-1 text-right">
								<!-- main nav start -->
								<nav class="top-nav">
									<ul class="nav sf-menu">

										<li>
											<a href="#">Trading</a>
										</li>
										<!-- eof pages -->
										<!-- eof blog -->

										<!-- shop -->
										<!-- eof shop -->

										<!-- contacts -->
										<li>
											<a href="{{route('about_us')}}">Our Approach</a>
										</li>
										<li>
											<a href="{{route('about_us')}}">About us</a>
										</li>
										<li>
											<a href="{{route('contact_us')}}">Contact us</a>
										</li>
										<!-- eof contacts -->
									</ul>


								</nav>
								<!-- eof main nav -->
							</div>
							<div class="col-xl-3 col-md-7 col-12  d-flex justify-content-md-end">


							</div>

						</div>

					</div>
					<!-- header toggler -->
					<span class="toggle_menu"><span>menu</span></span>
				</header>
			</div>

            @yield('content')

			<div id="footer"></div>


			<footer class="page_footer text-center text-sm-left  ds  s-pt-55 s-pb-60 s-pt-md-85 s-pb-md-90 s-pt-lg-125 s-pb-lg-130 s-pt-xl-160 s-pb-xl-155 c-gutter-30 s-parallax c-mb-50 c-mb-lg-0">
				<div class="container">
					<div class="row justify-content-center">

						<div class="col-lg-4 col-md-6  animate" data-animation="fadeInUp">
							<a href="/" class="logo">
								<img src="images/logo.png" alt="">
								<span class="d-flex flex-column">
									<span class="logo-text color-darkgrey">Opti Energy</span>
									<span class="logo-subtext">  Powering the Future.</span>
								</span>
							</a>
							<a href="https://www.linkedin.com/company/opti-energydmcc" class="fab fa-linkedin-in rounded-icon bg-icon fs-16" title="linkedin"></a>
						</div>

						<div class="col-lg-3 col-md-6 animate" data-animation="fadeInUp">

							<div class="widget widget_icons_list">
								<h3 class="widget-title">Contact Detail</h3>
								<ul>
									<li class="icon-inline ">
										<div class="icon-styled icon-top  bordered round fs-16">
											<i class="fas fa-phone"></i>
										</div>
										<p>+971 (58) 9646615</p>
									</li>
									<li class="icon-inline">
										<div class="icon-styled icon-top bordered round  fs-16">
											<i class="fas fa-envelope"></i>


										</div>
										<p>Info@OptiEnergies.com</p>
									</li>
									<li class="icon-inline">
										<div class="icon-styled icon-top bordered round  fs-16">
											<i class="fas fa-map-marker-alt"></i>
										</div>
										<p>
											<a href="#">AG-PF-356, JLT, DXB, UAE.</a>
										</p>
									</li>

								</ul>
							</div>
						</div>
{{-- 
						<div class="col-lg-3 col-md-6 animate" data-animation="fadeInUp">
							<div class="widget widget_nav_menu mb-0">
								<h3 class="widget-title">Our Services</h3>
								<ul class="list-unstyled">
									<li>
										<a href="service-single.html">Bottled water delivery</a>
									</li>
									<li>
										<a href="service-single.html">Water filters installation</a>
									</li>
									<li>
										<a href="service-single.html">Coffee delivery and service</a>
									</li>

									<li>
										<a href="service-single.html">Office equipment rent</a>
									</li>
								</ul>
							</div>
						</div> --}}


					</div>
				</div>

			</footer>


			<section class="page_copyright ls ms s-py-15 s-bordertop">
				<div class="container">
					<div class="row align-items-center">

						<div class="col-md-12 text-center">
							<p>&copy; Copyright <span class="copyright_year">{{date('Y')}}</span> All Rights Reserved</p>
						</div>

					</div>
				</div>
			</section>

		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->


	<script src="/js/compressed.js"></script>
	<script src="/js/main.js"></script>


	<!-- Google Map Script -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC0pr5xCHpaTGv12l73IExOHDJisBP2FK4&callback=initGoogleMap"></script>

</body>

</html>
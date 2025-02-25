<!doctype html>
<html class="no-js" lang="en">
<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Classic Whitestone– Interior Design & Cleaning Services</title>
		<meta name="robots" content="noindex, follow">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('classic/images/logo.jpg')}}">
		<!-- CSS
			============================================ -->
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{asset('classic/css/bootstrap.min.css')}}">
		<!-- Fontawesome -->
		<link rel="stylesheet" href="{{asset('classic/css/fontawesome.css')}}">
		<!-- Flaticon -->
		<link rel="stylesheet" href="{{asset('classic/css/flaticon.css')}}">
		<!-- Base Icons -->
		<link rel="stylesheet" href="{{asset('classic/css/pbminfotech-base-icons.css')}}">
		<!-- Themify Icons -->
		<link rel="stylesheet" href="{{asset('classic/css/themify-icons.css')}}">
		<!-- Slick -->
		<link rel="stylesheet" href="{{asset('classic/css/swiper.min.css')}}">
		<!-- Magnific -->
		<link rel="stylesheet" href="{{asset('classic/css/magnific-popup.css')}}">
		<!-- AOS -->
		<link rel="stylesheet" href="{{asset('classic/css/aos.css')}}">
		<!-- Shortcode CSS -->
		<link rel="stylesheet" href="{{asset('classic/css/shortcode.css')}}">
		<!-- Base CSS -->
		<link rel="stylesheet" href="{{asset('classic/css/base.css')}}">
		<!-- Style CSS -->
		<link rel="stylesheet" href="{{asset('classic/css/style.css')}}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{asset('classic/css/responsive.css')}}">
	</head>
	<body>

	<!-- page wrapper -->
	<div class="page-wrapper" id="page">

		<!-- Header Main Area -->
		<header class="site-header header-style-1">
			<div class="site-header-menu">
				<div class="pbmit-main-header-area pbmit-bg-color-white">
					<div class="container-fluid">
						<div class="pbmit-header-content d-flex justify-content-between align-items-center">
							<div class="pbmit-logo-menuarea d-flex justify-content-between align-items-center">
								<div class="site-branding">
									<h1 class="site-title">
										<a href="{{route('home')}}">
											<img class="logo-img" src="{{asset('classic/images/logo.jpg')}}">
										</a>
									</h1>
								</div>
								<div class="site-navigation">
									<nav class="main-menu navbar-expand-xl navbar-light">
										<div class="navbar-header">
											<!-- Toggle Button --> 
											<button class="navbar-toggler" type="button">
												<i class="pbmit-base-icon-menu-1"></i>
											</button>
										</div>
										<div class="pbmit-mobile-menu-bg"></div>
										<div class="collapse navbar-collapse clearfix show" id="pbmit-menu">
											<div class="pbmit-menu-wrap">
												<span class="closepanel">
													<svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="20.163" height="20.163" viewBox="0 0 26.163 26.163">
														<rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
														<rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
													</svg>
												</span>
												<ul class="navigation clearfix">
													<li><a href="{{route('home')}}">Home</a></li>
													<li><a href="{{route('about')}}">About Us</a></li>
													<li><a href="{{route('service')}}">Services</a></li>
													<li><a href="{{route('contact')}}">Contact Us</a></li>
												</ul>
											</div>
										</div>
									</nav>
								</div>
							</div>
							<div class="pbmit-right-box d-flex align-items-center">
								<div class="pbmit-button-box">
									<div class="pbmit-header-button">
										<a href="tel:+2348033842462">
											<span class="pbmit-header-button-text-1">+234 803 384 2462</span>			
										</a>
									</div>
								</div>
								<div class="pbmit-header-search-btn">
									
								</div>
								<div class="pbmit-button-box-second">
									<a class="pbmit-btn" href="{{route('contact')}}">
										<span class="pbmit-button-content-wrapper">
											<span class="pbmit-button-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
													<title>black-arrow</title>
													<path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
													<path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
													<path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
												</svg>
											</span>
											<span class="pbmit-button-text">Get a Quote</span>
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	{{ $slot }}

	</div>
	<!-- page content End -->

	<!-- footer -->
	<footer class="site-footer pbmit-bg-color-blackish" style="padding-left: 30px;">
		<div class="pbmit-footer-big-area">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-md-12 col-xl-4">
						<div class="pbmit-footer-logo">
							<img src="{{asset('classic/images/logo.jpg')}}" alt="">
						</div>	
					</div>
					<div class="col-md-12 col-xl-8">
						<form>
							<div class="pbmit-footer-newsletter">
								<h3 class="pbmit-footer-news-title">Subscribe to Our <br>Newsletter</h3>
								<div class="pbmit-news-wrap">
									<input type="email" class="form-control" name="EMAIL" placeholder="Enter Your Email Address">
									<button class="pbmit-btn pbmit-btn-global">
										<span class="pbmit-button-content-wrapper">
											<span class="pbmit-button-icon">
												<svg xmlns="http://www.w3.org/2000/svg" width="22.76" height="22.76" viewBox="0 0 22.76 22.76">
													<title>black-arrow</title>
													<path d="M22.34,1A14.67,14.67,0,0,1,12,5.3,14.6,14.6,0,0,1,6.08,4.06,14.68,14.68,0,0,1,1.59,1" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
													<path d="M22.34,1a14.67,14.67,0,0,0,0,20.75" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
													<path d="M22.34,1,1,22.34" transform="translate(-0.29 -0.29)" fill="none" stroke="#000" stroke-width="2"></path>
												</svg>
											</span>
											<span class="pbmit-button-text">Subscribe Now</span>
										</span>
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="pbmit-footer-widget-area">
			<div class="container">
				<div class="row">
					<div class="pbmit-footer-widget-col-1 col-md-3">
						<div class="widget">
							<div class="textwidget">
								<ul class="pbmit-social-links">
									<li class="pbmit-social-li pbmit-social-facebook">
										<a title="Facebook" href="#" target="_blank" rel="noopener">
											<span><i class="pbmit-base-icon-facebook-f"></i></span>
										</a>
									</li>
									<li class="pbmit-social-li pbmit-social-twitter">
										<a title="Twitter" href="#" target="_blank" rel="noopener">
											<span><i class="pbmit-base-icon-twitter-2"></i></span>
										</a>
									</li>
									<li class="pbmit-social-li pbmit-social-instagram">
										<a title="Instagram" href="https://www.instagram.com/classicwhitestonehomes/" target="_blank" rel="noopener">
											<span><i class="pbmit-base-icon-instagram"></i></span>
										</a>
									</li>
									<li class="pbmit-social-li pbmit-social-youtube">
										<a title="Youtube" href="#" target="_blank" rel="noopener">
											<span><i class="pbmit-base-icon-youtube-play"></i></span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="pbmit-footer-widget-col-2 col-md-3">
						<div class="widget pbmit-two-column-menu">
							<h2 class="widget-title">Useful Link</h2>
							<div class="textwidget">
								<ul>
									<li><a href="{{route('home')}}">Home</a></li>
									<li><a href="{{route('about')}}">About</a></li>
									<li><a href="{{route('service')}}">Services</a></li>
									<li><a href="{{route('contact')}}">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="pbmit-footer-widget-col-3 col-md-3">
						<div class="widget widget_text">
							<h2 class="widget-title">Working Time</h2>
							<div class="pbmit-timelist-wrapper">
								<ul class="pbmit-timelist-list">
									<li>
										<span class="pbmit-timelist-time">Mon - Fri: 9.00am - 5.00pm</span>
									</li>
									<li>
										<span class="pbmit-timelist-time">Saturday: 10.00am - 6.00pm</span>
									</li>
									<li>
										<span class="pbmit-timelist-time">Sunday Closed</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="pbmit-footer-widget-col-4 col-md-3">
						<aside class="widget">
							<h2 class="widget-title">Say Hello</h2>
							<div class="pbmit-contact-widget-lines">
								<div class="pbmit-contact-widget-line pbmit-contact-widget-phone">+234 803 384 2462</div>
								<div class="pbmit-contact-widget-line pbmit-contact-widget-email">info@classicwhitestone.com.ng</div>
							</div>
						</aside>
					</div>
				</div>
			</div>
		</div>
		<div class="pbmit-footer-text-area">
			<div class="container">
				<div class="pbmit-footer-text-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="pbmit-footer-copyright-text-area"> Copyright © 2025 <a href="{{route('home')}}">Classic Whitestone</a>, All Rights Reserved.</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- footer End -->

	</div>
	<!-- page wrapper End -->

	<!-- Search Box Start Here -->
	<div class="pbmit-search-overlay">
	<div class="pbmit-icon-close">
		<svg class="qodef-svg--close qodef-m" xmlns="http://www.w3.org/2000/svg" width="28.163" height="28.163" viewBox="0 0 26.163 26.163">
			<rect width="36" height="1" transform="translate(0.707) rotate(45)"></rect>
			<rect width="36" height="1" transform="translate(0 25.456) rotate(-45)"></rect>
		</svg>
	</div>
	<div class="pbmit-search-outer"> 
		<form class="pbmit-site-searchform">
			<input type="search" class="form-control field searchform-s" name="s" placeholder="Search …">
			<button type="submit"></button>
		</form>
	</div>
	</div>
	<!-- Search Box End Here -->

	<!-- Scroll To Top -->
	<div class="pbmit-progress-wrap">
	<svg class="pbmit-progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
		<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 19.2859;"></path>
	</svg>
	</div>
	<!-- Scroll To Top End -->

	<!-- JS
	============================================ -->
	<!-- jQuery JS -->
	<script src="{{asset('classic/js/jquery.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{asset('classic/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{asset('classic/js/bootstrap.min.js')}}"></script>
	<!-- jquery Waypoints JS -->
	<script src="{{asset('classic/js/jquery.waypoints.min.js')}}"></script>
	<!-- jquery Appear JS -->
	<script src="{{asset('classic/js/jquery.appear.js')}}"></script>
	<!-- Numinate JS -->
	<script src="{{asset('classic/js/numinate.min.js')}}"></script>
	<!-- Slick JS -->
	<script src="{{asset('classic/js/swiper.min.js')}}"></script>
	<!-- Magnific JS -->
	<script src="{{asset('classic/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- Circle Progress JS -->
	<script src="{{asset('classic/js/circle-progress.js')}}"></script> 
	<!-- countdown JS -->
	<script src="{{asset('classic/js/jquery.countdown.min.js')}}"></script> 
	<!-- AOS -->
	<script src="{{asset('classic/js/aos.js')}}"></script>
	<!-- GSAP -->
	<script src='{{asset('classic/js/gsap.js')}}'></script>
	<!-- Scroll Trigger -->
	<script src='{{asset('classic/js/ScrollTrigger.js')}}'></script>
	<!-- Split Text -->
	<script src='{{asset('classic/js/SplitText.js')}}'></script>
	<!-- Magnetic -->
	<script src='{{asset('classic/js/magnetic.js')}}'></script>
	<!-- Theia Sticky Sidebar JS -->
	<script src='{{asset('classic/js/theia-sticky-sidebar.js')}}'></script>
	<!-- GSAP Animation -->
	<script src='{{asset('classic/js/gsap-animation.js')}}'></script>
	<!-- Scripts JS -->
	<script src="{{asset('classic/js/scripts.js')}}"></script>

	</body>
</html>
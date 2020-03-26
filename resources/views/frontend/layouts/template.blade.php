<!DOCTYPE html>
<!-- Template Name: Clip-One - Frontend | Build with Twitter Bootstrap 3 | Version: 1.5 | Author: ClipTheme -->
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Covid 19 - JTI POLIJE</title>
		<!-- start: META -->
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{ asset('public/frontend/img/logo.ico')}}">
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link href="{{ asset('public/frontend/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="{{ asset('public/frontend/plugins/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('public/frontend/fonts/style.css')}}">
		<link rel="stylesheet" href="{{ asset('public/frontend/plugins/animate.css/animate.min.css')}}">
		<link rel="stylesheet" href="{{ asset('public/frontend/css/main.css')}}">
		<link rel="stylesheet" href="{{ asset('public/frontend/css/main-responsive.css')}}">
		<link rel="stylesheet" href="{{ asset('public/frontend/css/theme_blue.css')}}" type="text/css" id="skin_color">
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="{{ asset('public/frontend/plugins/revolution_slider/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{ asset('public/frontend/plugins/flex-slider/flexslider.css')}}">
		<link rel="stylesheet" href="{{ asset('public/frontend/plugins/colorbox/example2/colorbox.css')}}">
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: HTML5SHIV FOR IE8 -->
		<!--[if lt IE 9]>
		<script src="{{ asset('public/frontend/plugins/html5shiv.js')}}"></script>
		<![endif]-->
		<!-- end: HTML5SHIV FOR IE8 -->
	</head>
	<!-- end: HEAD -->
	<body>
		<!-- start: HEADER -->
		<header>
			<!-- start: SLIDING BAR (SB) -->
			
			<!-- end: SLIDING BAR -->
			<!-- start: TOP BAR -->
			<div class="clearfix " id="topbar">
				<div class="container">
					<div class="row">
						<div class="col-sm-6">
							<!-- start: TOP BAR CALL US -->
							<div class="callus">
								Call Us: 0331-333532 - Mail:
								<a href="mailto:politeknik@polije.ac.id">
									politeknik@polije.ac.id
								</a>
							</div>
							<!-- end: TOP BAR CALL US -->
						</div>
						<div class="col-sm-6">
							<!-- start: TOP BAR SOCIAL ICONS -->
							<div class="social-icons">
								<ul>
									<li class="social-facebook tooltips" data-original-title="Facebook" data-placement="bottom">
										<a target="_blank" href="https://www.facebook.com/jtipolije">
											Facebook
										</a>
									</li>
									<li class="social-youtube tooltips" data-original-title="YouTube" data-placement="bottom">
										<a target="_blank" href="https://www.youtube.com/channel/UCyjE1iZi_oXfVqJFzlM-WAQ">
											YouTube
										</a>
									</li>
								</ul>
							</div>
							<!-- end: TOP BAR SOCIAL ICONS -->
						</div>
					</div>
				</div>
			</div>
			<!-- end: TOP BAR -->
			<div role="navigation" class="navbar navbar-default navbar-fixed-top space-top">
				<!-- start: TOP NAVIGATION CONTAINER -->
				<div class="container">
					<div class="navbar-header">
						<!-- start: RESPONSIVE MENU TOGGLER -->
						<button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- end: RESPONSIVE MENU TOGGLER -->
						<!-- start: LOGO -->
						<a href="{{ url('/') }}">
					<img src="{{ asset('public/frontend/img/logo.svg')}}" width="300px" class="logo-img" alt="">
				</a>
						<!-- end: LOGO -->
					</div>
					@include('frontend/layouts.navbar')
					
				</div>
				<!-- end: TOP NAVIGATION CONTAINER -->
			</div>
		</header>
		<!-- end: HEADER -->
		@yield('content')
		</div>
		<!-- end: MAIN CONTAINER -->
		<!-- start: FOOTER -->
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="newsletter">
							<h4>Unit Pendukung</h4>
								<ul>
									<li><a href="http://jti.polije.ac.id/" target="_blank">JTI</a></li>
									<li><a href="https://www.polije.ac.id/" target="_blank">POLIJE</a></li>
								</ul>
						</div>
					</div>
					<div class="col-md-3">
						<h4>Informasi</h4>
								<ul>
									<li><a href="https://checkupcovid19.jatimprov.go.id/" target="_blank">Prov Jatim</a></li>
									<li><a href="https://covid19.kemkes.go.id/" target="_blank">Kemenkes</a></li>
									<li><a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019" target="_blank">WHO</a></li>
									<li><a href="https://www.google.com/covid19/" target="_blank">Google</a></li>
									<li><a href="https://www.bing.com/covid/" target="_blank">Bing</a></li>
								</ul>
					</div>
					<div class="col-md-4">
						<div class="contact-details">
							<h4>Contact Us</h4>
							<ul class="contact">
								<li>
									<p>
										<i class="fa fa-map-marker"></i><strong>Address:</strong> Jl. Mastrip PO.BOX 164 Jember, Jember, Jawa Timur, 68101, Indonesia 
									</p>
								</li>
								<li>
									<p>
										<i class="fa fa-phone"></i><strong>Phone:</strong> 0331-333532
									</p>
								</li>
								<li>
									<p>
										<i class="fa fa-envelope"></i><strong>Email:</strong>
										<a href="mailto:politeknik@polije.ac.id">
											politeknik@polije.ac.id
										</a>
									</p>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<h4>Follow Us</h4>
						<div class="social-icons">
							<ul>
								<li class="social-facebook tooltips" data-original-title="Facebook" data-placement="bottom">
									<a target="_blank" href="https://www.facebook.com/jtipolije" data-original-title="Facebook">
										Facebook
									</a>
								</li>
								<li class="social-youtube tooltips" data-original-title="YouTube" data-placement="bottom">
									<a target="_blank" href="https://www.youtube.com/channel/UCyjE1iZi_oXfVqJFzlM-WAQ" data-original-title="YouTube">
										YouTube
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-1">
							<a class="logo" href="{{ url('/')}}">
								<img src="{{ asset('public/frontend/img/logo_bottom.svg')}}" width="200px" class="logo-img" alt="">
							</a>
						</div>
						<div class="col-md-7">
							<p>
								&copy; Copyright 2020 by Apika Coding.
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<a id="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
		<!-- end: FOOTER -->
		<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="{{ asset('public/frontend/plugins/respond.min.js')}}"></script>
		<script src="{{ asset('public/frontend/plugins/excanvas.min.js')}}"></script>
		<script src="{{ asset('public/frontend/plugins/html5shiv.js')}}"></script>
		<script type="text/javascript" src="{{ asset('public/frontend/plugins/jQuery-lib/1.10.2/jquery.min.js')}}"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
		<script src="{{ asset('public/frontend/plugins/jQuery-lib/2.0.3/jquery.min.js')}}"></script>
		<!--<![endif]-->
		<script src="{{ asset('public/frontend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{ asset('public/frontend/plugins/jquery.transit/jquery.transit.js')}}"></script>
		<script src="{{ asset('public/frontend/plugins/hover-dropdown/twitter-bootstrap-hover-dropdown.min.js')}}"></script>
		<script src="{{ asset('public/frontend/plugins/jquery.appear/jquery.appear.js')}}"></script>
		<script src="{{ asset('public/frontend/plugins/blockUI/jquery.blockUI.js')}}"></script>
		<script src="{{ asset('public/frontend/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
		<script src="{{ asset('public/frontend/js/main.js')}}"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="{{ asset('public/frontend/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
		<script src="{{ asset('public/frontend/plugins/revolution_slider/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
		<script src="{{ asset('public/frontend/plugins/flex-slider/jquery.flexslider.js')}}"></script>
		<script src="{{ asset('public/frontend/plugins/stellar.js/jquery.stellar.min.js')}}"></script>
		<script src="{{ asset('public/frontend/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
		<script src="{{ asset('public/frontend/js/index.js')}}"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script>
			jQuery(document).ready(function() {
				Main.init();
				Index.init();
				$.stellar();
			});
		</script>
		@stack('content-js')
	</body>
</html>

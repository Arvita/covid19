<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.4 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
		<title>Covid 19 - JTI POLIJE</title>
		<!-- start: META -->
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="{{ asset('public/backend/plugins/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ asset('public/backend/plugins/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{ asset('public/backend/fonts/style.css')}}">
		<link rel="stylesheet" href="{{ asset('public/backend/css/main.css')}}">
		<link rel="stylesheet" href="{{ asset('public/backend/css/main-responsive.css')}}">
		<link rel="stylesheet" href="{{ asset('public/backend/plugins/iCheck/skins/all.css')}}">
		<link rel="stylesheet" href="{{ asset('public/backend/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css')}}">
		<link rel="stylesheet" href="{{ asset('public/backend/plugins/perfect-scrollbar/src/perfect-scrollbar.css')}}">
		<link rel="stylesheet" href="{{ asset('public/backend/css/theme_light.css')}}" type="text/css" id="skin_color">
		<link rel="stylesheet" href="{{ asset('public/backend/css/print.css')}}" type="text/css" media="print"/>
		
		<link rel="shortcut icon" href="{{ asset('public/backend/images/logo.ico') }}" />
		<!--[if IE 7]>
		<link rel="stylesheet" href="{{ asset('public/backend/plugins/font-awesome/css/font-awesome-ie7.min.css')}}">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body class="login example1">
    <div class="main-login col-sm-4 col-sm-offset-4">
      <div class="logo"><img id="default-logo" src="{{ asset('public/backend/images/logo_.svg')}}" width="400px" alt="covid19" >
      </div>
	@yield('content')
	<!-- start: COPYRIGHT -->
	<div class="copyright">
		2020 &copy; <a href="#">Apika Coding</a>
	</div>
	<!-- end: COPYRIGHT -->
</div>
<!-- start: MAIN JAVASCRIPTS -->
<!--[if lt IE 9]>
<script src="{{ asset('public/backend/plugins/respond.min.js')}}"></script>
<script src="{{ asset('public/backend/plugins/excanvas.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('public/backend/plugins/jQuery-lib/1.10.2/jquery.min.js')}}"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
<script src="{{ asset('public/backend/plugins/jQuery-lib/2.0.3/jquery.min.js')}}"></script>
<!--<![endif]-->
<script src="{{ asset('public/backend/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js')}}"></script>
<script src="{{ asset('public/backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('public/backend/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}"></script>
<script src="{{ asset('public/backend/plugins/blockUI/jquery.blockUI.js')}}"></script>
<script src="{{ asset('public/backend/plugins/iCheck/jquery.icheck.min.js')}}"></script>
<script src="{{ asset('public/backend/plugins/perfect-scrollbar/src/jquery.mousewheel.js')}}"></script>
<script src="{{ asset('public/backend/plugins/perfect-scrollbar/src/perfect-scrollbar.js')}}"></script>
<script src="{{ asset('public/backend/plugins/less/less-1.5.0.min.js')}}"></script>
<script src="{{ asset('public/backend/plugins/jquery-cookie/jquery.cookie.js')}}"></script>
<script src="{{ asset('public/backend/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js')}}"></script>
<script src="{{ asset('public/backend/js/main.js')}}"></script>
<!-- end: MAIN JAVASCRIPTS -->
<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script src="{{ asset('public/backend/plugins/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{ asset('public/backend/js/login.js')}}"></script>
<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
<script>
	jQuery(document).ready(function() {
		Main.init();
		Login.init();
	});
</script>
</body>
	<!-- end: BODY -->
</html>

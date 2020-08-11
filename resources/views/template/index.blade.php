<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<!-- <link rel="shortcut icon" href="img/fav.png"> -->
	<!-- Author Meta -->
	<meta name="author" content="">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Lorem Ipsum is simply dummy text of </title>

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<!--
			CSS
			============================================= -->
	<link rel="stylesheet" href="{{ asset('resources/css/linearicons.css') }}" />
	<link rel="stylesheet" href="{{ asset('resources/css/font-awesome.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('resources/css/bootstrap.css') }}" />
	<link rel="stylesheet" href="{{ asset('resources/css/magnific-popup.css') }}" />
	<link rel="stylesheet" href="{{ asset('resources/css/nice-select.css') }}" />
	<link rel="stylesheet" href="{{ asset('resources/css/animate.min.css') }}" />
	<link rel="stylesheet" href="{{ asset('resources/css/owl.carousel.css') }}" />
	<link rel="stylesheet" href="{{ asset('resources/css/main.css') }}" />

	<style>

		.home-slider.carousel {
			position: absolute;
			top: 0;
			right: 0;
			bottom: 0;
			left: 0;
		}

		.home-slider .carousel-inner,
		.home-slider .carousel-item {
			height: 100%;
		}

		.carousel-inner img {
			position: absolute;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			width: 100%;
			height: 100%;
			-o-object-fit: cover;
			   object-fit: cover;
		}

		.__header {
			padding: 15px;
		}

		.__header img {
			max-width: 256px;
		}

		.__header::before {
			content: '';
			display: block;
			position: absolute;
			top: -3px;
			right: 0;
			left: 0;
			height: 3px;
			background: -webkit-gradient(linear, left top, right top, from(#f76570), color-stop(8%, #f76570), color-stop(8%, #f3a46b), color-stop(16%, #f3a46b), color-stop(16%, #f3a46b), color-stop(16%, #ffd205), color-stop(24%, #ffd205), color-stop(24%, #ffd205), color-stop(24%, #1bbc9b), color-stop(25%, #1bbc9b), color-stop(32%, #1bbc9b), color-stop(32%, #14b9d5), color-stop(40%, #14b9d5), color-stop(40%, #c377e4), color-stop(48%, #c377e4), color-stop(48%, #f76570), color-stop(56%, #f76570), color-stop(56%, #f3a46b), color-stop(64%, #f3a46b), color-stop(64%, #ffd205), color-stop(72%, #ffd205), color-stop(72%, #1bbc9b), color-stop(80%, #1bbc9b), color-stop(80%, #14b9d5), color-stop(80%, #14b9d5), color-stop(89%, #14b9d5), color-stop(89%, #c377e4), to(#c377e4));
			background: linear-gradient(to right, #f76570 0%, #f76570 8%, #f3a46b 8%, #f3a46b 16%, #f3a46b 16%, #ffd205 16%, #ffd205 24%, #ffd205 24%, #1bbc9b 24%, #1bbc9b 25%, #1bbc9b 32%, #14b9d5 32%, #14b9d5 40%, #c377e4 40%, #c377e4 48%, #f76570 48%, #f76570 56%, #f3a46b 56%, #f3a46b 64%, #ffd205 64%, #ffd205 72%, #1bbc9b 72%, #1bbc9b 80%, #14b9d5 80%, #14b9d5 80%, #14b9d5 89%, #c377e4 89%, #c377e4 100%);
		}

		.__header.fixed {
			z-index: 1000;
			position: fixed;
			top: 0;
			right: 0;
			left: 0;
			-webkit-transform: translateY(-110%);
					transform: translateY(-110%);
		}

		.__header.sticky {
			-webkit-transform: translateY(0);
					transform: translateY(0);
		}

		.__header__container {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
				-ms-flex-align: center;
					align-items: center;
		}

		.__header__logo {
			max-width: 256px;
			margin-right: 50px;
		}

		.__header__menu {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			margin: 0;
			padding: 0;
			-webkit-box-align: center;
				-ms-flex-align: center;
					align-items: center;
		}

		.__header__menu li {
			margin-right: 50px;
		}

		.__header__menu a {
			display: block;
			color: #5e6d81;
			font-size: 16px;
			text-transform: uppercase;
		}

	</style>

</head>

<body>

	<header class="__header" id="docHeader">
		<div class="container __header__container">
			<a href="{{ Auth::check() ? route('home.book-now') : route('home') }}" class="__header__logo">
				<img src="{{ asset('assets/img/logo.png') }}" alt="" />
			</a>
		</div>
	</header>

	<!-- start banner Area -->
	<section class="banner-area relative" id="home" style="background: transparent;">
		<!-- <div class="overlay overlay-bg"></div> -->
		<div class="container">
			<div class="row fullscreen d-flex align-items-center justify-content-center" style="height:480px;">
				<div class="banner-content col-lg-12 col-md-12">
					<h6 class="text-left margin_top-45"><img class="img img-responsive" src="{{ asset('resources/img/welcome.png') }}" alt=""></h6>
					<h2 class="text-white text-left" style="margin-bottom: 2rem;">Lorem Ipsum is simply dummy text of </h2>
		
					@guest
						
						<a href="{{ route('login') }}" class="btn ticker-btn pull-left mr-15">Login</a>
						<a target="_blank" href="{{ route('register') }}" class="btn ticker-btn pull-left">Haven't Registered Yet?</a>
					@endguest
					
					
				</div>
			</div>
		</div>

		<div id="home-slider" class="carousel slide home-slider" data-ride="carousel" data-interval="5000">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="{{ asset('resources/img/CV-1.jpg') }}" alt="" />
				</div>
				<div class="carousel-item">
					<img src="{{ asset('resources/img/CV-2.jpg') }}" alt="" />
				</div>
				<div class="carousel-item">
					<img src="{{ asset('resources/img/CV-3.jpg') }}" alt="" />
				</div>
			</div>
			<a class="carousel-control-prev" href="#home-slider" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#home-slider" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>

	</section>
	<!-- End banner Area -->

	<!-- Start home-video Area -->
	<section class="home-video-area top_nagetive100 pb-0 home_section">
		<div class="container-fluid">
			<div class="col-xl-9 offset-xl-2">
				<div class="row justify-content-end align-items-center">
					<div class="col-lg-3 col-md-6 col-sm-12 about_left card_">
						<h6 class=""><img class="img img-responsive" src="{{ asset('resources/img/image-4.png') }}" alt=""></h6>
						<p>
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
						</p>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="card">
							<div class="img_">
								<img class="img img-responsive" src="{{ asset('resources/img/image-1.jpg') }}">
							</div>
							<div class="title">
								<h3 class="text-center"><b class="text-black text-center">Lorem Ipsum</b></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="card">
							<div class="img_">
								<img class="img img-responsive" src="{{ asset('resources/img/image-2.jpg') }}">
							</div>
							<div class="title">
								<h3 class="text-center"><b class="text-black text-center">Lorem Ipsum</b></h3>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12">
						<div class="card">
							<div class="img_">
								<img class="img img-responsive" src="{{ asset('resources/img/image-3.jpg') }}">
							</div>
							<div class="title">
								<h3 class="text-center"><b class="text-black ">Lorem Ipsum</b></h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End home-aboutus Area -->

	<section class="home-aboutus-area counter_section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3  col-md-3 col-sm-3">
					<div class="row">
						<div class="col-md-4">
							<img src="{{ asset('resources/img/users.png') }}" alt="">
						</div>
						<div class="col-md-8">
							<h2 class="text-white center-text "><span class="count">2580</span>+</h2>
							<p class="text-white center-text">Happy Client</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-3 col-sm-3">

					<div class="row">
						<div class="col-md-4">
							<img src="{{ asset('resources/img/arrow.png') }}" alt="">
						</div>
						<div class="col-md-8">
							<h2 class="text-white center-text "><span class="count">1880</span>+</h2>
							<p class="text-white center-text">Online Member</p>

						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-3 col-sm-3">
					<div class="row">
						<div class="col-md-4">
							<img src="{{ asset('resources/img/flag.png') }}" alt="">
						</div>
						<div class="col-md-8">
							<h2 class="text-white center-text "><span class="count">2212</span>+</h2>
							<p class="text-white center-text"> Complete Tour</p>

						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-3 col-sm-3">
					<div class="row">
						<div class="col-md-4">
							<img src="{{ asset('resources/img/trafi.png') }}" alt="">
						</div>
						<div class="col-md-8">
							<h2 class="text-white center-text "><span class="count">250</span>+</h2>
							<p class="text-white center-text">Award Wining</p>

						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Start video-sec Area -->

	<!-- End footer Area -->
	<script src="{{ asset('resources/js/vendor/jquery-2.2.4.min.js') }}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="{{ asset('resources/js/vendor/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="{{ asset('resources/js/easing.min.js') }}"></script>
	<script src="{{ asset('resources/js/hoverIntent.js') }}"></script>
	<script src="{{ asset('resources/js/superfish.min.js') }}"></script>
	<script src="{{ asset('resources/js/jquery.ajaxchimp.min.js') }}"></script>
	<script src="{{ asset('resources/js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('resources/js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('resources/js/jquery.sticky.js') }}"></script>
	<script src="{{ asset('resources/js/jquery.nice-select.min.js') }}"></script>
	<script src="{{ asset('resources/js/parallax.min.js') }}"></script>
	<script src="{{ asset('resources/js/mail-script.js') }}"></script>
	<script src="{{ asset('resources/js/main.js') }}"></script>

	<!--Start of Tawk.to Script-->
	<!-- <script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
			var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
			s1.async=true;
			s1.src='https://embed.tawk.to/5c0a361befb17917781f58d3/default';
			s1.charset='UTF-8';
			s1.setAttribute('crossorigin','*');
			s0.parentNode.insertBefore(s1,s0);
		})();
	</script> -->
	<!--End of Tawk.to Script-->

</body>

</html>
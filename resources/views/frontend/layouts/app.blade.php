<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('pageTitle') || Inna-Tafidah-Boye Foundation</title>
	<link rel="apple-touch-icon" sizes="180x180" href="/frontend/images/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/frontend/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/frontend/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="/frontend/images/favicons/site.webmanifest">
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
	<!-- plugins css -->
	<link rel="stylesheet" href="/frontend/vendors/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/frontend/vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="/frontend/vendors/tiny-slider/dist/tiny-slider.css">
	<link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="/frontend/vendors/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="/frontend/vendors/animate/animate.min.css">
	<link rel="stylesheet" href="/frontend/vendors/paroti-icons/style.css">
	<link rel="stylesheet" href="/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.css">
	<link rel="stylesheet" href="/frontend/vendors/youtube-popup/youtube-popup.css">
	<!-- template css -->
	<link rel="stylesheet" href="/frontend/css/paroti.css">
</head>

<body>
	<div class="preloader">
		<div class="preloader__inner">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div><!-- /.preloader__inner -->
	</div><!-- /.preloader -->
	@php
		$settings = App\Models\Setting::first();
	@endphp
	<div class="page-wrapper">
		@include('frontend.layouts.header')

        @yield('content')

		@include('frontend.layouts.footer')
	</div><!-- /.page-wrapper -->

	<div class="mobile-nav__wrapper">
		<div class="mobile-nav__overlay mobile-nav__toggler"></div><!-- /.mobile-nav__overlay -->
		<div class="mobile-nav__content">
			<a href="#" class="mobile-nav__close mobile-nav__toggler">
				<span></span>
				<span></span>
			</a>

			<div class="logo-box">
				<a href="index.html" aria-label="logo image"><img src="/frontend/images/logo-light.png" width="127"
						height="49" alt="Paroti"></a>
			</div>
			<!-- /.logo-box -->
			<div class="mobile-nav__container"></div>
			<!-- /.mobile-nav__container -->

			<ul class="mobile-nav__contact list-unstyled">
				<li>
					<i class="fa fa-phone"></i>
					<a href="tel:+8898006802">+ 88 ( 9800 ) 6802</a>
				</li>
				<li>
					<i class="fa fa-envelope"></i>
					<a href="mailto:needhelp@company.com">needhelp@company.com</a>
				</li>
				<li>
					<i class="fa fa-map-marker-alt"></i>
					88 Broklyn Golden Road Street <br> New York. USA
				</li>
			</ul><!-- /.mobile-nav__contact -->
			<ul class="mobile-nav__social">
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
			</ul><!-- /.mobile-nav__social -->



		</div><!-- /.mobile-nav__content -->
	</div><!-- /.mobile-nav__wrapper -->

	<div class="search-popup">
		<div class="search-popup__overlay search-toggler"></div><!-- /.search-popup__overlay -->
		<div class="search-popup__content">
			<form action="#">
				<label for="search" class="sr-only">search here</label><!-- /.sr-only -->
				<input type="text" id="search" placeholder="Search Here..." />
				<button type="submit" aria-label="search submit" class="thm-btn">
					<span><i class="paroti-icon-magnifying-glass"></i></span>
				</button>
			</form>
		</div><!-- /.search-popup__content -->
	</div><!-- /.search-popup -->

	<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

	<!-- plugins js -->
	<script src="/frontend/vendors/jquery/jquery-3.6.1.min.js"></script>
	<script src="/frontend/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="/frontend/vendors/tiny-slider/dist/min/tiny-slider.js"></script>
	<script src="/frontend/vendors/jquery-validation/jquery.validate.min.js"></script>
	<script src="/frontend/vendors/wow/wow.js"></script>
	<script src="/frontend/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
	<script src="/frontend/vendors/jquery-appear/jquery.appear.min.js"></script>
	<script src="/frontend/vendors/owl-carousel/owl.carousel.min.js"></script>
	<script src="/frontend/vendors/jquery-magnific-popup/jquery.magnific-popup.min.js"></script>
	<script src="/frontend/vendors/youtube-popup/youtube-popup.jquery.js"></script>
	<!-- template js -->
	<script src="/frontend/js/paroti.js"></script>
</body>

</html>
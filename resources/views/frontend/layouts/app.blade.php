<!DOCTYPE html>
<html lang="en">
    @php
    $settings = App\Models\Setting::first();
@endphp
<head>
    <meta charset="utf-8">
    <title>@yield('pageTitle') | Inna-Tafidah-Boya Foundation</title>
    <link href="/frontend/css/bootstrap.css" rel="stylesheet">
    <link href="/frontend/css/fontawesome-all.css" rel="stylesheet">
    <link href="/frontend/css/custom-animate.css" rel="stylesheet">
    <link href="/frontend/css/animate.css" rel="stylesheet">
    <link href="/frontend/css/jquery-ui-1.9.2.custom.min.css" rel="stylesheet">
    <link href="/frontend/css/nice-select.css" rel="stylesheet">
    <link href="/frontend/css/flaticon.css" rel="stylesheet">
    <link href="/frontend/css/owl.css" rel="stylesheet">
    <link href="/frontend/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="/frontend/css/scrollbar.css" rel="stylesheet">
    <link href="/frontend/css/swiper.min.css" rel="stylesheet">
    <link href="/frontend/css/style.css" rel="stylesheet">
    <link href="/frontend/css/responsive.css" rel="stylesheet">
    <link href="/frontend/css/color.css" rel="stylesheet">
    <link href="/frontend/css/scrollbar.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;0,800;0,900;1,300;1,400;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="/{{ $settings->logo }}" type="image/x-icon">
    <link rel="icon" href="/{{ $settings->logo }}" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"> </head>

<body>
   
<div class="body_wrapper">
    <div class="preloader_wrapper">
        <div class="preloader"></div>
    </div>
	@include('frontend.layouts.header')
    <div id="search_s1" class="search_s1">
        <div class="close-search theme-btn"><i class="far fa-times"></i></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="#">
                    <div class="form-group">
                        <fieldset> <input type="search" class="form-control" name="search-input" value="" placeholder="Type & Enter" required> </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>
	@yield('content')
   @include('frontend.layouts.footer')
    <a href="# " class="back-to-top " data-wow-duration="1.0s " data-wow-delay="1.0s "> <i class="fas fa-angle-up "></i> </a> 
</div>
    <script src="/frontend/js/jquery.js"></script>
    <script src="/frontend/js/bootstrap.bundle.min.js"></script>
    <script src="/frontend/js/isotope.js"></script>
    <script src="/frontend/js/owl.js"></script>
    <script src="/frontend/js/appear.js"></script>
    <script src="/frontend/js/wow.js"></script>
    <script src="/frontend/js/TweenMax.min.js"></script>
    <script src="/frontend/js/swiper.min.js"></script>    
    <script src="/frontend/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="/frontend/js/jquery.circle-progress.min.js"></script>
    <script src="/frontend/js/knob.js"></script>
    <script src="/frontend/js/jquery.fancybox.js"></script>
    <script src="/frontend/js/jquery.nice-select.min.js"></script>
    <script src="/frontend/js/active.js"></script>
</body>

</html>
<header class="header_s1 header-one">
    <div class="header-one__inner">
        <div class="logo-one"> <a href="{{ route('homepage') }}"> <img src="/{{ $settings->logo }}" width="100" height="100" alt="Logo" title=""> </a> </div>
        <div class="header-one-content">
            <div class="header-one-content__top">
                <div class="our-info-one">
                    <ul>
                        <li>
                            <div class="icon"> <span class="flaticon-envelope"></span> </div>
                            <div class="text">
                                <h6><a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></h6>
                            </div>
                        </li>
                        <li>
                            <div class="icon clr2"> <span class="flaticon-call"></span> </div>
                            <div class="text">
                                <h6><a class="clr2" href="tel:{{ $settings->phone_number }}">{{ $settings->phone_number }}</a></h6>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="social-info-one">
                    <ul>
                        <li><a href="javascript:void(0)"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-fa fa-behance" aria-hidden="true"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-youtube" aria-hidden="true"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="header-one-content__bottom">
                <div class="header-one-content__bottom-left">
                    <div class="nav-outer clearfix">
                        <div class="mobile-nav-toggler">
                            <div class="inner"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </div>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    
                                   
                                    <li><a href="{{ route('homepage') }}">Home</a></li>
                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                    <li><a href="{{ route('projects.all') }}">Our Projects</a></li>
                                    <li><a href="">Events</a></li>
                                    <li><a href="{{ route('blogs.all') }}">Blog</a></li>
                                    <li><a href="{{ route('team') }}">Our Team</a></li>
                                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="header-one-content__bottom-right">
                    <div class="header-btn-one"> <a href="c#" class="theme-btn">Explore Causes<span class="flaticon-right-arrow"></span></a> </div>
                    <div class="hidden-content-btn bar-box"> <a class="side-nav-toggler nav-toggler sidebar_header-opener" href="#"> <img src="/frontend/images/resource/nav1.png" alt=""> </a> </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-header">
        <div class="theme_container">
            <div class="sticky-header__inner">
                <div class="logo pull-left"> <a href="{{ route('homepage') }}" class="img-responsive"> <img src="/{{ $settings->logo }}" width="60" height="60" alt="" title=""> </a> </div>
                <div class="right-col pull-right">
                    <nav class="main-menu clearfix"> </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon far fa-times"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="{{ route('homepage') }}"><img src="/{{ $settings->logo }}" width="70" height="70" alt="" title=""></a></div>
            <div class="menu-outer"> </div>
        </nav>
    </div>
</header>
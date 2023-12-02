<header class="main-header">
    <div class="topbar">
        <div class="container-fluid">
            <div class="topbar__inner">
                <ul class="list-unstyled topbar__info">
                    <li>
                        <i class="fa fa-map"></i>
                        <a href="#">{{ $settings->address }}</a>
                    </li>
                    <li>
                        <i class="fa fa-envelope-open"></i>
                        <a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a>
                    </li>
                    <li>
                        <i class="fa fa-mobile"></i>
                        <a href="tel:+1(307)776-0608">{{ $settings->phone_number }}</a>
                    </li>
                </ul><!-- /.topbar__info -->
                <div class="topbar__social">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-pinterest"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <ul class="list-unstyled topbar__links">
                    <li><a href="{{ route('admin.home') }}">Admin</a></li>
                </ul><!-- /.topbar__links -->
            </div><!-- /.topbar__inner -->
        </div><!-- /.container-fluid -->
    </div><!-- /.topbar -->
    <nav class="main-menu sticky-header">
        <div class="container-fluid">
            <a href="{{ route('homepage') }}" class="main-header__logo">
                <img src="{{ $settings->logo }}" width="127" height="49" alt="">
            </a>

            <ul class="main-menu__list">
          
                <li><a href="">Home</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Projects</a></li>
                <li><a href="">Events</a></li>
                <li><a href="">Blogs</a></li>
                <li><a href="">Contact Us</a></li>
            </ul><!-- /.main-menu__list -->

            <div class="main-menu__right">
                <div class="main-menu__cta">
                    <div class="main-menu__cta__icon">
                        <i class="paroti-icon-volunteer"></i>
                    </div><!-- /.main-menu__cta__icon -->
                    <div class="main-menu__cta__text">
                        <span>Join us now</span>
                        <a href="#">Become a Volunteer</a>
                    </div><!-- /.main-menu__cta__text -->
                </div><!-- /.main-menu__cta -->
                <a href="#" class="thm-btn thm-btn--two ">
                    <span>Donate Now</span>
                    <i class="fa fa-heart"></i>
                </a><!-- /.thm-btn--two -->
                <a href="#" class="main-header__btn search-toggler">
                    <i class="paroti-icon-magnifying-glass"></i>
                </a>
              
                <a href="#" class="main-header__toggler mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </a>
            </div><!-- /.main-menu__right -->
        </div><!-- /.container-fluid -->
    </nav><!-- /.main-menu -->
</header>
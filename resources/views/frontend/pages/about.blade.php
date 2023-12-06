@extends('frontend.layouts.app')
@section('pageTitle', 'About Us')
@section('content')

    <section class="breadcrumb-section-one">
        <div class="breadcrumb-section-one-bg" style="background-image: url(/images/banner3.jpeg);"> </div>
        <div class="theme_container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="inner-content">
                        <div class="title-box">
                            <div class="sec-title">
                                <div class="tagline"> <span class="left"></span>
                                    <h6>Inna-Tafidah-Boya Foundation</h6>
                                </div>
                                <h2 class="title">About Us</h2>
                            </div>
                        </div>
                        <div class="breadcrumb-menu">
                            <ul>
                                <li><a href="{{ route('homepage') }}">Home</a></li>
                                <li class="active">About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section-three">
        <div class="theme_container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-addon-six">
                        <div class="image-one"> <img src="/images/image1.jpg" height="800" width="520"
                                alt="" /> </div>
                        <div class="image-two">
                            <div class="inner wow slideInLeft" data-wow-delay="500ms"> <img src="/images/small.jpeg"
                                    style="width: 50%; border: 4px solid white" alt="" /> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-addon-seven">
                        <div class="sec-title">
                            <div class="tagline"> <span class="left"></span>
                                <h6>About Us</h6>
                            </div>
                            {{-- <h2 class="title">Meet With Our <br>Ordinary Soldiers.</h2> --}}
                            <p class="text">Welcome to the Inna-Tafidah-Boya Foundation, where our journey is rooted in
                                gratitude and a profound sense of community. Established in 2018, our foundation is a
                                tribute to the individuals who shaped our lives - our mother (Inna), father (Tafidah), and
                                grandmother (Boya). Their influence inspires our commitment to giving back to the community
                                that nurtured us.</p>
                            <h4 class="mt-3">Our Vision</h4>
                            <p>Mentoring youths and uplifting the less privileged for a more prosperous and brighter future.
                            </p>
                            <h4 class="mt-3">Our Mission</h4>
                            <p>Reinforcing people with the ability to break free from the poverty cycle and become
                                significant contributors to themselves and society.</p>
                        </div>
                        <ul>
                            <li>
                                <div class="icon"> <span class="flaticon-vegetables"></span> </div>
                                <div class="title">
                                    <h2>Rising Food <br>& Water</h2>
                                </div>
                            </li>
                            <li>
                                <div class="icon clr2"> <span class="flaticon-pills"></span> </div>
                                <div class="title">
                                    <h2>Medicine <br>& Human Health</h2>
                                </div>
                            </li>
                        </ul>
                        {{-- <div class="button-box">
                      <div class="btn1"> <a href="event.html" class="theme-btn">Learn More</a> </div>
                      <div class="btn2"> <a href="cause-grid.html" class="theme-btn">Join With Us</a> </div>
                  </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="features-section-two">
        <div class="theme_container">
            <div class="row">
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="features-addon-three text-center">
                        <div class="icon"> <span class="flaticon-social-care"></span> </div>
                        <h2><a href="#">Empowering Minds Through Education</a></h2>
                        <div class="text">
                            <p> Our commitment to education is at the core of our foundation. Through the establishment of
                                classrooms, hostels, and Islamiyya schools, we aim to provide quality education, empowering
                                the younger generation to become future leaders</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                    <div class="features-addon-three text-center">
                        <div class="icon"> <span class="flaticon-hand-washing"></span> </div>
                        <h2><a href="#">Ensuring Well-being in Every Drop</a></h2>
                        <div class="text">
                            <p>Clean water is fundamental to health. With the installation of 36 boreholes and wells, we are
                                dedicated to ensuring access to clean water, contributing to the well-being of individuals
                                and communities.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="features-addon-three text-center">
                        <div class="icon"> <span class="flaticon-donation"></span> </div>
                        <h2><a href="#">Building Foundations for Prosperity</a></h2>
                        <div class="text">
                            <p>Our community development initiatives range from renovating mosques to supporting orphan
                                education. Each project aims to create sustainable, thriving communities, fostering unity,
                                resilience, and a brighter future for all.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gallery-section-one">
        <div class="theme_container">
            <div class="sec-title text-center">
                <div class="tagline"> <span class="left"></span>
                    <h6>Insights</h6> <span class="right"></span>
                </div>
                <h2 class="title">Our recent Projects Photo Gallery.</h2>
            </div>
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="gallery-addon-one">
                        <div class="img-box"> <img src="/images/image1.jpg" alt="" />
                            <div class="overlay-btn"> <a data-fancybox="gallery1" href="/images/image1.jpg">Our Gallary
                                    <span class="flaticon-right-arrow"></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="gallery-addon-one">
                        <div class="img-box"> <img src="/images/image3.jpg" alt="" />
                            <div class="overlay-btn"> <a data-fancybox="gallery1" href="/images/image3.jpg">Our Gallary
                                    <span class="flaticon-right-arrow"></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="gallery-addon-one">
                        <div class="img-box"> <img src="/images/banner1.jpeg" alt="" />
                            <div class="overlay-btn"> <a data-fancybox="gallery1" href="/images/banner1.jpeg">Our Gallary
                                    <span class="flaticon-right-arrow"></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="gallery-addon-one">
                        <div class="img-box"> <img src="/images/banner2.jpeg" alt="" />
                            <div class="overlay-btn"> <a data-fancybox="gallery1" href="/images/banner2.jpeg">Our Gallary
                                    <span class="flaticon-right-arrow"></span></a> </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4">
                    <div class="gallery-addon-one">
                        <div class="img-box"> <img src="/images/banner3.jpeg" alt="" />
                            <div class="overlay-btn"> <a data-fancybox="gallery1" href="/images/banner3.jpeg">Our Gallary
                                    <span class="flaticon-right-arrow"></span></a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="news-section-one style4">
        <div class="theme_container">
            <div class="sec-title text-center">
                <div class="tagline"> <span class="left"></span>
                    <h6>Insights</h6> <span class="right"></span>
                </div>
                <h2 class="title">News Feeds</h2>
            </div>
            <div class="row">

              @foreach ($blogs as $blog)
           <div class="col-xl-4 col-lg-4 wow fadeInLeft" data-wow-delay="0ms">
                <div class="news-addon-one">
                    <div class="image-box"> <img src="{{ $blog->featured_image }}" height="260" width="410" alt="" /> </div>
                    <div class="content-box">
                        <ul class="meta-info">
                            <li>
                                <p><span class="flaticon-calendar"></span> {{ $blog->created_at->format('d, M Y') }}</p>
                            </li>
                           
                        </ul>
                        <h2><a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a> </h2>
                        <div class="author-box">
                            <div class="img"> <img src="/default.png" alt="" /> </div>
                            <div class="name">
                                <p>Admin</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          @endforeach

            </div>
        </div>
    </section>

@endsection

@extends('frontend.layouts.app')
@section('pageTitle', 'Home')
@section('content')


@include('frontend.layouts.slider')





<section class="donation-form-one">
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-12">
              <div class="donation-form-one-inner">
                  <div class="shape1 float-bob-y"></div>
                  <div class="shape2 zoom-fade"></div>
                  
                  <div class="row">
                      <div class="col-lg-6">
                          <div class="card text-center">
                              <div class="card-body">
                                  <h5 class="card-title">Our Mission</h5>
                                  <p class="card-text">Our Mission is to empower people to create a path out of poverty for themselves and for their communities</p>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-6">
                          <div class="card text-center">
                              <div class="card-body">
                                  <h5 class="card-title">Our Vision</h5>
                                  <p class="card-text">Our Vision is to mentor youth and less privileged to acquire skills and education for a more prosperous future.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- End of Vision & Mission Cards -->
              </div>
          </div>
      </div>
  </div>
</section>






<section class="about-section-one">
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-6">
              <div class="about-addon-one">
                  <div class="image-one"> <img src="/images/image1.jpg" alt="" /> </div>
                  <div class="image-two wow zoomIn" data-wow-delay="100ms">
                      <div class="inner"> <img src="/images/banner1.jpeg" alt="" width="300" height="300" /> </div>
                  </div>
              </div>
          </div>
          <div class="col-xl-6">
              <div class="about-addon-two">
                  <div class="sec-title">
                      <div class="tagline"> <span class="left"></span>
                          <h6>About Us</h6>
                      </div>
                      {{-- <h5 class="title">Empowering Lives, Building Futures</h5> --}}
                  </div>
                  <div class="author-box">
                      <div class="icon"><span class="flaticon-chat"></span></div>
                      <p>Welcome to the Inna-Tafidah-Boya Foundation! Since 2018, we've been transforming lives through education and community support. Together, let's create a brighter future.</p><span>Alhaji Abdullahi Bawa, Founder</span> </div>
                  <div class="text">
                      <p>Founded in 2018, the Inna-Tafidah-Boya Foundation is a symbol of gratitude and community commitment. Our mission is clear: break the chains of poverty, mentor the youth, and uplift the less privileged. Through initiatives in education, healthcare, and entrepreneurship, we're creating a brighter, self-reliant future for all.</p>
                      <p>Join us on this transformative journey, where each action contributes to building dreams and transforming lives.</p>
                  </div>
                  <div class="button-box">
                      <div class="btn1"> <a href="{{ route('contact') }}" class="theme-btn">Contact Us</a> </div>
                      <div class="btn2"> <a href="#" class="theme-btn">Join With Us</a> </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="services-section-one">
  <div class="theme_container">
      <div class="sec-title text-center">
          <div class="tagline"> <span class="left"></span>
              <h6>Services</h6> <span class="right"></span> </div>
          <h2 class="title">What We Do</h2>
      </div>
      <div class="row">
          <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="0ms">
              <div class="services-addon-one text-center">
                  <div class="inner">
                      <div class="count-box"></div>
                      <h2><a href="javascript:void(0)">Entrepreneurship Development</a></h2>
                      <p>Fostering self-reliance and economic growth through entrepreneurship programs, training individuals in tailoring, makeup, and more.</p>
                  </div>
                  <div class="icon"> <span class="flaticon-social-care"></span> </div>
              </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInLeft" data-wow-delay="100ms">
              <div class="services-addon-one text-center">
                  <div class="inner">
                      <div class="count-box color2"></div>
                      <h2><a href="javascript:void(0)">Healthcare Initiatives</a></h2>
                      <p>Ensuring well-being through healthcare initiatives, from boreholes for clean water to medical assistance for individuals and communities.</p>
                  </div>
                  <div class="icon clr2"> <span class="flaticon-doctor"></span> </div>
              </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="0ms">
              <div class="services-addon-one text-center">
                  <div class="inner">
                      <div class="count-box color3"></div>
                      <h2><a href="javascript:void(0)"> Education for All</a></h2>
                      <p>Transforming lives through education—building schools and supporting underprivileged students for a brighter future.</p>
                  </div>
                  <div class="icon clr3"> <span class="flaticon-magistrate"></span> </div>
              </div>
          </div>
          <div class="col-xl-3 col-lg-3 col-md-6 wow fadeInRight" data-wow-delay="100ms">
              <div class="services-addon-one text-center">
                  <div class="inner">
                      <div class="count-box color4"></div>
                      <h2><a href="javascript:void(0)">Community Infrastructure</a></h2>
                      <p>Investing in community infrastructure, from mosques to boreholes, for sustainable and thriving communities.</p>
                  </div>
                  <div class="icon clr4"> <span class="flaticon-hand-washing"></span> </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="causes-section-one">
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-12">
              <div class="causes-section-one-top">
                  <div class="sec-title">
                      <div class="tagline"> <span class="left"></span>
                          <h6>Projects</h6>
                      </div>
                      <h2 class="title">Our Projects</h2>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="theme_container">
      <div class="sortable-masonry">
          <div class="items-container row">
            @foreach ($projects as $project)
            <div class="col-lg-4 masonry-item all water education medical">
                  <div class="causes-section-addon-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                      <div class="img-box">
                          <div class="inner"> <img src="{{ $project->featured_image }}" height="260" width="410" alt="" /> </div>
                      </div>
                      <div class="content-box">
                          <h2><a href="{{ route('projects.show', ['slug' => $project->slug]) }}">{{ $project->title }}</a> </h2>
                          <div class="button-box mt-2"> <a href="cause-details.html" class="theme-btn">See Details <span class="flaticon-right-arrow"></span></a> </div>

                      </div>
                      <div class="content-box overlay">
                          <h2><a href="{{ route('projects.show', ['slug' => $project->slug]) }}">{{ $project->title }}</a> </h2>
                          <div class="button-box"> <a href="cause-details.html" class="theme-btn">See Details <span class="flaticon-right-arrow"></span></a> </div>
                      </div>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</section>

<section class="counter-section-one">
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-12">
              <div class="counter-section-one-inner">
                  <div class="title-block">
                      <div class="sec-title">
                          <div class="tagline"> <span class="left"></span>
                              <h6>Some Fun Fact</h6>
                          </div>
                          <h2 class="title">Thank To The Results <br>Achieved With You!</h2>
                      </div>
                  </div>
                  <div class="content-addon">
                      <ul>
                          <li class="wow slideInUp animated" data-wow-delay="0.1s" data-wow-duration="1500ms">
                              <div class="count-outer count-box"> <span class="count-text" data-speed="3000" data-stop="500">0</span>
                                  <p>Empowered Lives</p>
                              </div>
                          </li>
                          <li class="wow slideInUp animated" data-wow-delay="0.3s" data-wow-duration="1500ms">
                              <div class="count-outer count-box bg2"> <span class="count-text" data-speed="3000" data-stop="6">0</span>
                                  <p>Educational Impact</p>
                              </div>
                          </li>
                          <li class="wow slideInUp animated" data-wow-delay="0.5s" data-wow-duration="1500ms">
                              <div class="count-outer count-box bg3"> <span class="count-text" data-speed="3000" data-stop="36">0</span>
                                  <p>Healthcare Reach</p>
                              </div>
                          </li>
                          <li class="wow slideInUp animated" data-wow-delay="0.7s" data-wow-duration="1500ms">
                              <div class="count-outer count-box bg4"> <span class="count-text" data-speed="3000" data-stop="10">0</span>
                                  <p>Community Development</p>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="video-section-one">
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-8 col-lg-8">
              <div class="video-addon-one" style="background-image: url(/images/banner3.jpeg);">
                  <div class="icon"> <a data-fancybox="gallery" href="https://www.youtube.com/watch?v=okzxk1almeA" class="video-one__btn video-popup"> <span class="flaticon-play"></span> </a> </div>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 wow slideInRight" data-wow-delay="500ms" data-wow-duration="2500ms">
              <div class="video-addon-two">
                  <div class="icon-bg"><span class="flaticon-social-care"></span></div>
                  <form id="video-addon-two-form" action="#">
                      <div class="row">
                          <div class="col-md-12">
                              <div class="title">
                                  <h2>Become a Volunteer</h2>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="input-box"> <input type="text" name="fname" value="" placeholder="Enter user name" required="">
                                          <div class="icon"><span class="flaticon-user"></span></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="input-box"> <input type="email" name="femail" value="" placeholder="Enter email address " required="">
                                          <div class="icon clr2"><span class="flaticon-user"></span> </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="select-box"> <select class="selectmenu wide"> <option selected="selected">Subject</option> <option>Business Growth</option> <option>Sustainability</option> </select> </div>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md-12">
                                      <div class="button-box"> <button class="btn-one" type="submit"> <span class="theme-btn">Join Us<span class="flaticon-right-arrow"></span></span> </button> </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="brand-section-one">
  <div class="brand-section-one-bg"> <img src="/frontend/images/background/brand-v1-bg.png" alt="" /> </div>
  <div class="theme_container">
      <div class="sec-title text-center">
          <h2 class="title">Trusted by the biggest <span class="clr1">nonprofits,</span> <span class="clr2">events &</span> <br><span class="clr3">companies</span> in the world.</h2>
      </div>
      <div class="row">
          <div class="col-xl-12">
              <div class="brand-section-one-inner">
                  <div class="top-box">
                      <div class="brand-addon-one"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-img1.png" alt="Awesome Image"></a>
                          <div class="overlay-box"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-overlay-img1.png" alt="Awesome Image"></a> </div>
                      </div>
                      <div class="brand-addon-one"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-img2.png" alt="Awesome Image"></a>
                          <div class="overlay-box"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-overlay-img2.png" alt="Awesome Image"></a> </div>
                      </div>
                      <div class="brand-addon-one"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-img3.png" alt="Awesome Image"></a>
                          <div class="overlay-box"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-overlay-img3.png" alt="Awesome Image"></a> </div>
                      </div>
                      <div class="brand-addon-one"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-img4.png" alt="Awesome Image"></a>
                          <div class="overlay-box"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-overlay-img4.png" alt="Awesome Image"></a> </div>
                      </div>
                  </div>
                  <div class="bottom-box">
                      <div class="brand-addon-one text-center"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-img5.png" alt="Awesome Image"></a>
                          <div class="overlay-box"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-overlay-img5.png" alt="Awesome Image"></a> </div>
                      </div>
                      <div class="brand-addon-one text-center"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-img6.png" alt="Awesome Image"></a>
                          <div class="overlay-box"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-overlay-img6.png" alt="Awesome Image"></a> </div>
                      </div>
                      <div class="brand-addon-one text-center"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-img7.png" alt="Awesome Image"></a>
                          <div class="overlay-box"> <a href="javascript:void(0)"><img src="/frontend/images/brand/brand-v1-overlay-img7.png" alt="Awesome Image"></a> </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="events-section-one">
  <div class="theme_container">
      <div class="sec-title">
          <div class="tagline"> <span class="left"></span>
              <h6>Events</h6>
          </div>
          <h2 class="title">Upcoming Events</h2>
      </div>
      <div class="row">
          @foreach ($events as $event)
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="events-addon-one">
                    <div class="inner">
                        <div class="layer-outer" style="background-image: url(/frontend/images/resource/section-five-img1.jpg);"> </div>
                        <div class="left">
                            <div class="date-box">
                                <div class="inner-text">
                                    <div class="overlay-img" style="background-image: url(/frontend/images/resource/section-five-img2.jpg);"> </div>
                                    <h2>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $event->date)->format('d') }}</h2>
                                    <p>{{ \Carbon\Carbon::createFromFormat('Y-m-d', $event->date)->format('M') }}</p>
                                </div>
                            </div>
                            <div class="middle-text">
                                <h2><a href="{{ route('events.show', ['slug' => $event->slug]) }}">{{ $event->title }}</a> </h2>
                                {{-- <p>Jude charity rating and review. According to Charity Navigator, ALSAC/St. Jude Children's Research</p> --}}
                                <ul>
                                    <li>
                                        <div class="icon"> <span class="flaticon-calendar"></span> </div>
                                        <div class="text">
                                            <p>{{ $event->date }}</p>
                                        </div>
                                    </li>
                                    
                                    <li>
                                        <div class="icon"> <span class="flaticon-bookmark"></span> </div>
                                        <div class="text">
                                            <p><span>Location:</span> {{ $event->location }}</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="button-box"> <a href="{{ route('events.show', ['slug' => $event->slug]) }}" class="theme-btn">Get A Seat <span class="flaticon-right-arrow"></span></a> </div>
                    </div>
                </div>
            </div>
          @endforeach
      </div>
  </div>
</section>
@php
  $settings = App\Models\Setting::first();
@endphp
<section class="cta-section-one">
  <div class="cta-section-one-bg" style="background-image: url(/);"> </div>
  <div class="theme_container">
      <div class="row">
          <div class="col-lg-12">
              <div class="cta-section-one-inner">
                  <div class="cta-addon-one">
                      <h2>Contact Us Now! <a href="tel:{{ $settings->phone_number }}">{{ $settings->phone_number }}</a></h2>
                      <h3>An organization set up to provide help and raise money for those in need. </h3>
                  </div>
                  <div class="cta-addon-two"> <a href="{{ route('contact') }}" class="theme-btn">Get In Touch<span class="flaticon-right-arrow"></span></a> </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="news-section-one">
  <div class="theme_container">
      <div class="sec-title text-center">
          <div class="tagline"> <span class="left"></span>
              <h6>Insights</h6> <span class="right"></span> </div>
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
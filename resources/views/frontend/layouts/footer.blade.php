<footer class="main-footer">
  <div class="main-footer-top">
      <div class="overlay-bg" style="background-image: url(/images/banner2.jpeg);"> </div>
      <div class="theme_container">
          <div class="widgets-section">
              <div class="row clearfix">
                  <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                      <div class="footer-widget-item">
                          <div class="title">
                              <h2>About Us</h2>
                          </div>
                          <div class="our-info">
                              <div class="text">
                                  <p>Empowering lives through education, healthcare, and community development. Join us in making a difference.</p>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                      <div class="footer-widget-item mar-t50">
                          <div class="title">
                              <h2>News Feeds</h2>
                          </div>
                          @php
                            $blogs = App\Models\Blog::orderBy('created_at', 'desc')->take(3)->get();;
                          @endphp
                          <div class="footer-widget-news">
                              <ul>
                                  <li>
                                      <div class="img-box"> <img src="/{{ $blogs[0]->featured_image }}" height="80" width="80" alt="" /> </div>
                                      <div class="text-box">
                                          <p><span class="flaticon-calendar-1"></span>{{ $blogs[0]->created_at->format('d, M Y') }}</p>
                                          <h6><a href="{{ route('blogs.show', ['slug' => $blogs[0]->slug]) }}">{{ $blogs[0]->title }}</a></h6>
                                      </div>
                                  </li>
                                  <li>
                                      <div class="img-box"> <img src="/{{ $blogs[1]->featured_image }}" height="80" width="80" alt="" /> </div>
                                      <div class="text-box">
                                          <p><span class="flaticon-calendar-1"></span>{{ $blogs[1]->created_at->format('d, M Y') }}</p>
                                          <h6><a href="{{ route('blogs.show', ['slug' => $blogs[1]->slug]) }}">{{ $blogs[1]->title }}</a></h6>
                                      </div>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.5s">
                      <div class="footer-widget-item mar-l13">
                          <div class="title">
                              <h2>Newsletter</h2>
                          </div>
                          <div class="footer-widget-newsletter">
                              <p>Subscribe our newsletter to get our <br>latest updates & news.</p>
                              <div class="subscribe-box">
                                  <form class="subscribe-form" action="#">
                                      <div class="input-box"> <input type="email" name="email" placeholder="Enter email address"> </div><button type="submit"><span class="flaticon-sent-mail"></span></button> </form>
                              </div>
                              <div class="social-link">
                                  <ul>
                                      <li><a href="javascript:void(0)"><i class="fab fa-facebook" aria-hidden="true"></i></a> </li>
                                      <li><a href="javascript:void(0)"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                                      <li><a href="javascript:void(0)"><i class="fab fa-fa fa-behance" aria-hidden="true"></i></a> </li>
                                      <li><a href="javascript:void(0)"><i class="fab fa-youtube" aria-hidden="true"></i></a> </li>
                                      <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a> </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.7s">
                      <div class="footer-widget-item mar-l43">
                          <div class="title">
                              <h2>More Pages</h2>
                          </div>
                          <div class="footer-widget-page-link">
                              <ul class="footer-widget-page-link-list">
                                  <li><a href="{{ route('about') }}">About Us</a></li>
                                  <li><a href="mission.html">Mission</a></li>
                                  <li><a href="{{ route('projects.all') }}">Causes</a></li>
                                  <li><a href="{{ route('blogs.all') }}">Blog</a></li>
                                  <li><a href="#">Events</a></li>
                              </ul>
                              <ul class="footer-widget-page-link-list footer-widget-page-link-list-two">
                                  <li><a href="javascript:void(0)">Terms & Conditions</a></li>
                                  <li><a href="{{ route('login') }}">Admin Login</a></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="main-footer-bottom">
      <div class="theme_container">
          <div class="main-footer-bottom-inner">
              <div class="text">
                  <p>© Copyright 2022 <a href="javascript:void(0)">Inna-tafidah-Boya.</a> - All Right's Reserved</p>
              </div>
              <div class="logo"> <a href="{{ route('homepage') }}"><img src="/{{ $settings->logo }}" height="50" width="50" alt=""/></a> </div>
              <div class="main-footer-bottom-list">
                  <p>Developed by <a href="a">TechFushion Labs</a></p>
              </div>
          </div>
      </div>
  </div>
</footer> 
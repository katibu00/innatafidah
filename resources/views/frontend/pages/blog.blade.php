@extends('frontend.layouts.app')
@section('pageTitle', $blog->title)
@section('content')



<section class="breadcrumb-section-one">
  <div class="breadcrumb-section-one-bg" style="background-image: url({{ '/'.$blog->featured_image }});"> </div>
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-12">
              <div class="inner-content">
                  <div class="title-box">
                      <div class="sec-title">
                          <div class="tagline"> <span class="left"></span>
                              <h6>Inna-Tafidah-Boya Foundation</h6>
                          </div>
                          <h5 class="titale">{{ $blog->title }}</h5>
                      </div>
                  </div>
                 
              </div>
          </div>
      </div>
  </div>
</section>

<section class="news-details-page">
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-8 col-lg-8">
              <div class="news-details-page-content">
                  <div class="news-page-addon">
                      <div class="content-box">
                          <ul class="meta-info">
                             
                              <li>
                                  <p><span class="flaticon-bubble-chat"></span> 0 Comments </p>
                              </li>
                              <li>
                                  <p><span class="flaticon-calendar-1"></span> {{ $blog->created_at->format('d M Y') }} </p>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="text-box1">
                    <h3>{{ $blog->title }}</h3>
                    {!! $blog->body !!}
                  </div>
                  <div class="image-box1"> <img src="assets/images/blog/news-details-page-img1.jpg" alt="" /> </div>
                  
                  
                  
                  <div class="tag-social-share-box">
                      <div class="single-box">
                          <div class="title">
                              <h3>Releted Tags</h3>
                          </div>
                          <ul class="tag-list">
                             
                          </ul>
                      </div>
                      <div class="single-box">
                          <div class="title right">
                              <h3>Social Share</h3>
                          </div>
                          <ul class="social-share">
                              <li> <a href="javascript:void(0)"><i class="fab fa-facebook" aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)"><i class="fab fa-twitter" aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)"><i class="fab fa-linkedin" aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)"><i class="fab fa-behance" aria-hidden="true"></i></a> </li>
                              <li> <a href="javascript:void(0)"><i class="fab fa-pinterest-square" aria-hidden="true"></i></a> </li>
                          </ul>
                      </div>
                  </div>
    
                  <div class="add-comment-box">
                      <div class="title">
                          <h3>Post Comment</h3>
                      </div>
                      <form id="add-comment-form" action="#">
                          <div class="row">
                              <div class="col-md-12">
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="input-box"> <textarea name="message" placeholder="Type your comments...." required=""></textarea>
                                              <div class="icon"><span class="flaticon-pen"></span></div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="input-box"> <input type="text" name="fname" value="" placeholder="Type your name...." required="">
                                              <div class="icon"><span class="flaticon-user"></span></div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="input-box"> <input type="email" name="femail" value="" placeholder="Type your email...." required="">
                                              <div class="icon"><span class="flaticon-mail"></span></div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="input-box"> <input type="text" name="fwebsite" value="" placeholder="Type your website....">
                                              <div class="icon"><span class="flaticon-globe"></span> </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-12">
                                          <div class="button-box"> <button class="theme-btn" type="submit"> <span class="txt"><i class="flaticon-bubble-chat"></i>Post Comments</span> </button> </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4 col-md-9 col-sm-12">
              <div class="sidebar-wrapper">
             
                  <div class="sidebar-addon wow fadeInUp animated" data-wow-delay="0.1s" data-wow-duration="1200ms">
                      <div class="title">
                          <h3>// Search Here</h3>
                      </div>
                      <div class="sidebar-search-box">
                          <form class="search-form" action="#"> <input placeholder="Search your keyword..." type="text"> <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button> </form>
                      </div>
                  </div>
                  <div class="sidebar-addon wow fadeInUp animated" data-wow-delay="0.2s" data-wow-duration="1200ms">
                      <div class="title">
                          <h3>// Recent Feeds</h3>
                      </div>
                      <ul class="popular-feeds">
                        @foreach ($recents as $recent) 
                        <li>
                              <div class="inner">
                                  <div class="img-box"> <img src="{{ '/'.$recent->featured_image }}" width="100" height="90" alt="Awesome Image">
                                      <div class="overlay-content"> <a href="{{ route('blogs.show', ['slug' => $recent->slug]) }}"><i class="fa fa-link" aria-hidden="true"></i></a> </div>
                                  </div>
                                  <div class="title-box">
                                      <h4><a href="{{ route('blogs.show', ['slug' => $recent->slug]) }}">{{ $recent->title }}</a> </h4>
                                      <p><span class="flaticon-calendar"></span>{{ $blog->created_at->format('M d, Y') }}</p>
                                  </div>
                              </div>
                          </li>
                         @endforeach
                      </ul>
                  </div>
                 
              
              </div>
          </div>
      </div>
  </div>
</section>

@endsection
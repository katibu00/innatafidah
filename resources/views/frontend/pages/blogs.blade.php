@extends('frontend.layouts.app')
@section('pageTitle', 'Blogs')
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
                              <h6>Inna-Tafidah-Boya</h6>
                          </div>
                          <h2 class="title">News Feeds</h2>
                      </div>
                  </div>
                  <div class="breadcrumb-menu">
                      <ul>
                          <li><a href="{{ route('homepage') }}">Home</a></li>
                          <li class="active">News</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="news-page">
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-8 col-lg-8">
              <div class="news-page-content">
                @foreach ($blogs as $blog)
                  <div class="news-page-addon">
                      <div class="img-box">
                          <div class="inner"> <img src="/{{ $blog->featured_image }}" alt="" /> </div>
                          {{-- <div class="overlay-text"> <span>Business</span> </div> --}}
                          <div class="meta-info">
                              <div class="img"> <img src="assets/images/blog/news-page-client-info-img.jpg" alt="" /> </div>
                              <div class="title">
                                  <p>by Admin</p>
                              </div>
                          </div>
                      </div>
                      <div class="content-box">
                          <h2><a href="{{ route('blogs.show', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h2>
                          <p>{!! Illuminate\Support\Str::limit($blog->body, 100, '...') !!}</p>
                          <ul class="meta-info">
                              
                              <li>
                                  <p><span class="flaticon-bubble-chat"></span> 0 Comments </p>
                              </li>
                              <li>
                                  <p><span class="flaticon-calendar-1"></span> {{ $blog->created_at->format('M d, Y') }} </p>
                              </li>
                          </ul>
                      </div>
                  </div>
                 @endforeach
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
                 
         
              </div>
          </div>
      </div>
  </div>
</section>


@endsection
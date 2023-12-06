@extends('frontend.layouts.app')
@section('pageTitle', $project->title)
@section('content')

<section class="breadcrumb-section-one">
  <div class="breadcrumb-section-one-bg" style="background-image: url(/images/banner2.jpeg);"> </div>
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-12">
              <div class="inner-content">
                  <div class="title-box">
                      <div class="sec-title">
                          <div class="tagline"> <span class="left"></span>
                              <h6>Best Charity Website Design</h6>
                          </div>
                          <h2 class="title">Projects Details</h2>
                      </div>
                  </div>
                  <div class="breadcrumb-menu">
                      <ul>
                          <li><a href="">Home</a></li>
                          <li class="active">{{ $project->title }}</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="cause-details">
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-7">
              <div class="cause-details-content-addon">
                  <div class="image-one"> <img src="{{ '/'.$project->featured_image }}" alt="" /> </div>
                  <div class="title">
                      <h2>{{ $project->title }}</h2>
                  </div>
                 
                  <div class="text-box1">
                    {!! $project->body !!}
                  </div>
                  
              </div>
          </div>
          <div class="col-xl-5">
              <div class="cause-details-sidebar">
                  <div class="cause-details-sidebar-top">
                      
                     
                      <div class="cause-details-photo-showcase clearfix">
                          <div class="title">
                              <h3>Projects Gallery</h3>
                          </div>
                          <ul>
                            @foreach ($recents as $recent) 
                              <li>
                                  <div class="img"> <a data-fancybox="gallery" href="{{ '/'.$recent->featured_image }}"><img src="{{ '/'.$recent->featured_image }}" alt="" /></a> </div>
                              </li>
                             @endforeach
                          </ul>
                      </div>
                  </div>
                  @php
                    $settings = App\Models\Setting::first();
                  @endphp
                  <div class="cause-details-sidebar-bottom text-center">
                      <div class="logo-box"> <a href="{{ route('homepage') }}"><img src="/{{ $settings->logo }}" width="100" height="100" alt=""/></a> </div>
                      <div class="text">
                          <p>Empowering lives through education, healthcare, and community development. Join us in making a difference.</p>
                      </div>
                      <div class="button-box"> <a href="javascript:void(0)" class="theme-btn">About Us</a> </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

@endsection
@extends('frontend.layouts.app')
@section('pageTitle', 'Projects')
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
                          <h2 class="title">Our Projects</h2>
                      </div>
                  </div>
                  <div class="breadcrumb-menu">
                      <ul>
                          <li><a href="{{ route('homepage') }}">Home</a></li>
                          <li class="active">Projects</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="causes-list_section">
    <div class="theme_container">
        @foreach ($projects as $key => $project)
            <div class="causes-section-addon-two wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                <div class="row no-gutters">
                    <div class="col-lg-6 @if($key % 2 == 1) order-lg-2 @endif">
                        <div class="img-box">
                            <div class="inner"> <img src="/{{ $project->featured_image }}" alt="news article img" /> </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="content-box">
                           
                            <h2><a href="{{ route('projects.show', ['slug' => $project->slug]) }}">{{ $project->title }}</a></h2>
                            <div class="text">{!! Illuminate\Support\Str::limit($project->body, 100, '...') !!}</div>
                            <div class="bottom">
                               <a href="{{ route('projects.show', ['slug' => $project->slug]) }}" class="theme-btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

@endsection

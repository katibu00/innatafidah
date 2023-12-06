@extends('frontend.layouts.app')
@section('pageTitle', 'Our Team')
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
                            <h2 class="title">Volunteer</h2>
                        </div>
                    </div>
                    <div class="breadcrumb-menu">
                        <ul>
                            <li><a href="{{ route('homepage') }}">Home</a></li>
                            <li class="active">Our Team</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="volunteer">
    <div class="theme_container">
        <div class="row">
            @foreach ($teamMembers as $team)
            <div class="col-lg-3 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                <div class="team-addon-two-single">
                    <div class="image-box text-center">
                        <div class="inner"> <img src="{{ asset($team->profile_image) }}" height="180" width="180" alt="" /> </div>
                    </div>
                    <div class="text-box text-center">
                        <p>{{ $team->position }}</p>
                        <h2><a href="javascript:void(0)">{{ $team->name }}</a></h2>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="col-lg-3">
                <div class="voluneeter-addon text-center">
                    <div class="icon"><img src="assets/images/resource/team-7.png" alt=""></div>
                    <h4>Apply For <br>As A Volunteer</h4> <a href="javascript:void(0)" class="theme-btn style6">Apply Now</a> </div>
            </div>
        </div>
    </div>
</section>


@endsection
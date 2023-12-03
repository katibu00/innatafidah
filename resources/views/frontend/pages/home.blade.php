@extends('frontend.layouts.app')
@section('pageTitle', 'Home')
@section('content')

@include('frontend.layouts.slider')

<section class="sec-pad-top sec-pad-bottom about-two">
  <img src="/frontend/images/shapes/about-2-1.png" class="about-two__shape-1 float-bob-x" alt="">
  <div class="container">
    <div class="row gutter-y-60">
      <div class="col-md-12 col-lg-6">
        <div class="about-two__image">
          <div class="about-two__image__shape-1"></div>
          <div class="about-two__image__shape-2"></div>
          <div class="about-two__image__shape-3"></div>
          <img src="/images/banner2.jpeg" class="wow fadeInLeft"
            data-wow-duration="1500ms" alt="">
          <div class="about-two__image__caption">
            <h3 class="about-two__image__caption__count count-box">
              <span class="count-text" data-stop="7" data-speed="1500"></span>+
            </h3>
            <p class="about-two__image__caption__text">Years of work
              experience</p>
          </div>
        </div>
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="about-two__content">
          <div class="sec-title">
            <p class="sec-title__tagline">About Inna-Tafidah-Boya Foundation</p>
            <h2 class="sec-title__title">Empowering Lives, Creating Futures</h2>
          </div>
          <p class="about-two__text">
            Welcome to Inna-Tafidah-Boya Foundation, where we are dedicated to empowering individuals and creating a brighter future. Our foundation, established in 2018, has been a symbol of hope and positive change in our community.
          </p>
          <ul class="list-unstyled about-two__info">
            <li class="about-two__info__item">
              <i class="paroti-icon-sponsor"></i>
              <h3 class="about-two__info__title">Supporting Sustainable Projects</h3>
            </li>
            <li class="about-two__info__item" style="--accent-color: #8139e7;">
              <i class="paroti-icon-solidarity"></i>
              <h3 class="about-two__info__title">Empowering through Education</h3>
            </li>
          </ul>
          <ul class="list-unstyled about-two__list">
            <li>
              <i class="fa fa-check-circle"></i>
              Our foundation focuses on building a sustainable future for all.
            </li>
            <li>
              <i class="fa fa-check-circle"></i>
              Together, we've achieved numerous milestones in education, health, and community development.
            </li>
          </ul>
          <div class="about-two__btns">
            <a href="#" class="thm-btn about-two__btn">
              <span>Discover Our Mission</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="sec-pad-top sec-pad-bottom donation-two">
  <div class="container">
    <div class="row gutter-y-60">
      <div class="col-md-12 col-lg-4">
        <div class="sec-title">
          <p class="sec-title__tagline">Change everything</p>
          <h2 class="sec-title__title">We’re here to help them</h2>
        </div>
        <p class="donation-two__text">Man braid hell of edison bulb four brunch subway
          tile authentic, chillwave put a bird on it church-key try-hard ramps heirloom.</p>
        
      </div>
      <div class="col-md-12 col-lg-6">
        <div class="thm-owl__carousel owl-carousel owl-theme donation-two__carousel" data-owl-options='{
          "items": 1,
          "margin": 0,
          "loop": false,
          "nav": false,
          "dots": false,
          "autoplay": false,
          "responsive": {
            "0": {
              "items": 1
            },
            "576": {
              "items": 2,
              "margin": 30
            }
          }
        }'>
          <div class="item">
            <div class="donation-card-two">
              <div class="donation-card-two__bg"></div>
              <h3 class="donation-card-two__title"><a href="donation-details.html">Healthy
                  food</a></h3>
              <p class="donation-card-two__text">When nothing prevents our to we like best, every
                pleasure to be.</p>
              <i class="paroti-icon-organic-food donation-card-two__icon"></i>
              <a href="donation-details.html"><i
                  class="fa fa-angle-double-right donation-card-two__link"></i></a>
              <div class="donation-card-two__shape"></div>
            </div>
          </div>
          <div class="item">
            <div class="donation-card-two" style="--accent-color: #fdbe44;">
              <div class="donation-card-two__bg"></div>
              <h3 class="donation-card-two__title"><a href="donation-details.html">Kids
                  education</a></h3>
              <p class="donation-card-two__text">When nothing prevents our to we like best, every
                pleasure to be.</p>
              <i class="paroti-icon-education donation-card-two__icon"></i>
              <a href="donation-details.html"><i
                  class="fa fa-angle-double-right donation-card-two__link"></i></a>
              <div class="donation-card-two__shape"></div>
            </div>
          </div>
          <div class="item">
            <div class="donation-card-two" style="--accent-color: #8139e7;">
              <div class="donation-card-two__bg"></div>
              <h3 class="donation-card-two__title"><a href="donation-details.html">Medical
                  care</a></h3>
              <p class="donation-card-two__text">When nothing prevents our to we like best, every
                pleasure to be.</p>
              <i class="paroti-icon-patient  donation-card-two__icon"></i>
              <a href="donation-details.html"><i
                  class="fa fa-angle-double-right donation-card-two__link"></i></a>
              <div class="donation-card-two__shape"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sec-pad-top sec-pad-bottom cta-one">
  <div class="cta-one__bg" style="background-image: url(/frontend/images/backgrounds/cta-bg-1-1.jpg);"></div>
  <div class="cta-one__shape" style="background-image: url(/frontend/images/shapes/cta-s-1-1.png)">
  </div>
  
  
  <div class="container  text-center">
    <div class="sec-title">
      <p class="sec-title__tagline">We’re here to support poor people</p>
      <h2 class="sec-title__title">Fundraising for the people and <br>
        <span>causes</span> you care about</h2>
    </div>
    <a href="donations.html" class="thm-btn cta-one__btn"><span>Start donating thAem</span></a>
  </div>
</section>

<section class="sec-pad-top sec-pad-bottom">
  <div class="container">
    <div class="sec-title ">
      <p class="sec-title__tagline">Start donating them</p>
      <h2 class="sec-title__title">Find popular projects</h2>
    </div>

    <div class="donations-carousel">
      <div class="thm-tns__carousel" id="donations-carousel-1" data-tns-options='{
        "container": "#donations-carousel-1",
        "loop": true,
        "autoplay": true,
        "items": 1,
        "gutter": 0,
        "mouseDrag": true,
        "touch": true,
        "nav": true,
        "autoplayButtonOutput": false,
        "controls": false,
        "responsive": {
          "0": {
            "items": 1,
            "gutter": 0
          },
          "576": {
            "items": 1,
            "gutter": 0
          },
          "768": {
            "items": 2,
            "gutter": 30
          },
          "992": {
            "items": 2,
            "gutter": 30
          },
          "1200": {
            "items": 3,
            "gutter": 30
          }
        }
      }'>
      @foreach ($projects as $project)
        <div class="item">
          <div class="donations-card">
            <div class="donations-card__image">
              <img src="{{ $project->featured_image }}" alt="">
              
            </div>
            <div class="donations-card__content">
              <h3 class="donations-card__title"><a href="{{ route('projects.show', ['slug' => $project->slug]) }}">{{ $project->title }}</a></h3>
              <p class="donations-card__text">{!! Illuminate\Support\Str::limit($project->body, 100, '...') !!}</p>
              
              
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>




<section class="sec-pad-top sec-pad-bottom video-one">
  <div class="container">
    <div class="video-one__inner"
      style="background-image: url(/frontend/images/backgrounds/video-inner-bg-1-1.jpg);">
      <div class="row gutter-y-60">
        <div class="col-md-12 col-lg-6">
          <div class="video-one__content">
            <a href="https://www.youtube.com/watch?v=CWCPovmNWK8"
              class="video-one__btn video-popup">
              <i class="fa fa-play"></i>
              <span class="video-one__btn__arrow"></span>
            </a>
            <h3 class="video-one__title count-box">Help us to donate <br>
              $<span class="count-text" data-stop="3800" data-speed="1500"></span> to poor
              childrens</h3>
            <ul class="list-unstyled video-one__list">
              <li>
                <i class="fa fa-check-circle"></i>
                If you are going to use a pass available
              </li>
              <li>
                <i class="fa fa-check-circle"></i>
                Lorem ipsum the majority have suffered
              </li>
              <li>
                <i class="fa fa-check-circle"></i>
                Totam rem aperiam eaque ipsam
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-12 col-lg-6">
          <form action="/frontend/inc/sendemail.php"
            class=" contact-one__form video-one__form contact-form-validated">
            <div class="row">
              <div class="col-md-6">
                <input type="text" placeholder="Your name" name="name">
              </div>
              <div class="col-md-6">
                <input type="text" placeholder="Your phone" name="phone">
              </div>
              <div class="col-md-12">
                <input type="text" placeholder="Email address" name="email">
              </div>
              <div class="col-md-12">
                <input type="text" placeholder="Location" name="location">
              </div>
              <div class="col-md-12">
                <textarea name="message" placeholder="Message"></textarea>
              </div>
              <div class="col-md-12">
                <button type="submit" class="thm-btn contact-one__btn"><span>Continue
                    now</span></button>
              </div>
            </div>

          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="sec-pad-top sec-pad-bottom sponsor-carousel">
  <div class="container">
    <div class="thm-tns__carousel" id="sponsor-carousel-1" data-tns-options='{
      "container": "#sponsor-carousel-1",
      "loop": true,
      "autoplay": true,
      "items": 2,
      "gutter": 30,
      "mouseDrag": true,
      "touch": true,
      "nav": false,
      "autoplayButtonOutput": false,
      "controls": false,
      "responsive": {
        "0": {
          "items": 2,
          "gutter": 30
        },
        "576": {
          "items": 3,
          "gutter": 30
        },
        "768": {
          "items": 4,
          "gutter": 30
        },
        "992": {
          "items": 5,
          "gutter": 50
        },
        "1200": {
          "items": 5,
          "gutter": 140
        }
      }
    }'>
      <div class="item">
        <img src="/frontend/images/resources/brand-1.png" alt="">
      </div>
      <div class="item">
        <img src="/frontend/images/resources/brand-1.png" alt="">
      </div>
      <div class="item">
        <img src="/frontend/images/resources/brand-1.png" alt="">
      </div>
      <div class="item">
        <img src="/frontend/images/resources/brand-1.png" alt="">
      </div>
      <div class="item">
        <img src="/frontend/images/resources/brand-1.png" alt="">
      </div>
      <div class="item">
        <img src="/frontend/images/resources/brand-1.png" alt="">
      </div>
      <div class="item">
        <img src="/frontend/images/resources/brand-1.png" alt="">
      </div>
      <div class="item">
        <img src="/frontend/images/resources/brand-1.png" alt="">
      </div>
      <div class="item">
        <img src="/frontend/images/resources/brand-1.png" alt="">
      </div>
      <div class="item">
        <img src="/frontend/images/resources/brand-1.png" alt="">
      </div>
    </div>
  </div>
</section>

<section class="funfact-two sec-pad-top sec-pad-bottom"
  style="background-image: url(/frontend/images/backgrounds/funfact-bg-1-1.jpg);">
  <div class="funfact-two__shape"></div>
  <div class="container">
    <div class="sec-title text-center">
      <p class="sec-title__tagline">Let’s support us to help them</p>
      <h2 class="sec-title__title">Join your hands with us for <br>a better life and future</h2>
    </div>
    <ul class="list-unstyled funfact-two__list">
      <li class="funfact-two__list__item">
        <div class="funfact-two__list__icon">
          <i class="paroti-icon-campaign"></i>
        </div>
        <h3 class="funfact-two__list__count count-box"><span class="count-text" data-stop="4850"
            data-speed="1500"></span>
        </h3>
        <p class="funfact-two__list__text">Total Campaigns</p>
      </li>
      <li class="funfact-two__list__item" style="--accent-color: #fdbe44;">
        <div class="funfact-two__list__icon">
          <i class="paroti-icon-budget"></i>
        </div>
        <h3 class="funfact-two__list__count count-box"><span class="count-text" data-stop="3456"
            data-speed="1500"></span>
        </h3>
        <p class="funfact-two__list__text">Raised Funds</p>
      </li>
      <li class="funfact-two__list__item" style="--accent-color: #138999;">
        <div class="funfact-two__list__icon">
          <i class="paroti-icon-social-campaign"></i>
        </div>
        <h3 class="funfact-two__list__count count-box"><span class="count-text" data-stop="480"
            data-speed="1500"></span>
        </h3>
        <p class="funfact-two__list__text">Satisfied Donors</p>
      </li>
      <li class="funfact-two__list__item" style="--accent-color: #8139e7;">
        <div class="funfact-two__list__icon">
          <i class="paroti-icon-help"></i>
        </div>
        <h3 class="funfact-two__list__count count-box"><span class="count-text" data-stop="2068"
            data-speed="1500"></span>
        </h3>
        <p class="funfact-two__list__text">Happy Volunteers</p>
      </li>
    </ul>
  </div>
</section>

<section class="sec-pad-top sec-pad-bottom">
  <div class="container">
    <div class="sec-title text-center">
      <p class="sec-title__tagline">Watch our latest blogs</p>
      <h2 class="sec-title__title">Latest news & articles</h2>
    </div>
    <div class="blog-carousel">
      <div class="thm-tns__carousel " id="blog-carousel-1" data-tns-options='{
      "container": "#blog-carousel-1",
      "loop": true,
      "autoplay": true,
      "items": 1,
      "gutter": 0,
      "mouseDrag": true,
      "touch": true,
      "nav": false,
      "autoplayButtonOutput": false,
      "controls": false,
      "responsive": {
        "0": {
          "items": 1,
          "gutter": 0
        },
        "576": {
          "items": 1,
          "gutter": 0
        },
        "768": {
          "items": 2,
          "gutter": 30
        },
        "992": {
          "items": 2,
          "gutter": 30
        },
        "1200": {
          "items": 3,
          "gutter": 30
        }
      }
    }'>
    
        <div class="item">
          <div class="blog-card">
            <div class="blog-card__image">
              <img src="/frontend/images/blog/blog-1-1.jpg" alt="">
              <div class="blog-card__date">
                <span>28</span>Oct
              </div>
            </div>
            <div class="blog-card__content">
              <ul class="blog-card__meta list-unstyled">
                <li>
                  <i class="fa fa-user"></i>
                  <a href="#">by Admin</a>
                </li>
                <li>
                  <i class="fa fa-comments"></i>
                  <a href="#">02 comments</a>
                </li>
              </ul>
              <h3 class="blog-card__title"><a href="blog-details.html">Online legal advice for
                  asylum seekers in Greece</a></h3>
              <a href="blog-details.html" class="blog-card__links">
                <i class="fa fa-angle-double-right"></i>
                Read More</a>
            </div>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</section>



<section class="newsletter-one">
  <div class="newsletter-one__bg"
    style="background-image: url(/frontend/images/backgrounds/newsletter-1-1.png);"></div>
  
  <div class="newsletter-one__shape float-bob-x">
    <img src="/frontend/images/shapes/newsletter-1-1.png" alt="">
  </div>
  <div class="container">
    <div class="newsletter-one__icon float-bob-y">
      <img src="/frontend/images/shapes/newsletter-1-2.png" alt="">
    </div>
    <div class="row">
      <div class="col-lg-7">
        <div class="sec-title">
          <p class="sec-title__tagline">Wordwide non-profit charity</p>
          <h2 class="sec-title__title">Give a helping hand for <br> needy People</h2>
        </div>
        <form action="#" class="mc-form newsletter-one__form">
          <input type="email" placeholder="Your email">
          <button type="submit" class="newsletter-one__form__btn">
            Subscribe
          </button>
        </form>
        <div class="mc-response"></div>
      </div>
    </div>
  </div>
</section>

@endsection
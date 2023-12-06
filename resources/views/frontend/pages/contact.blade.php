@extends('frontend.layouts.app')
@section('pageTitle','Contact Us')
@section('content')

@php
  $settings = App\Models\Setting::first();
@endphp
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
                          <h2 class="title">Get In Touch</h2>
                      </div>
                  </div>
                  <div class="breadcrumb-menu">
                      <ul>
                          <li><a href="{{ route('homepage') }}">Home</a></li>
                          <li class="active">Contact</li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="contact-page-google-map"> <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
      class="contact-page-google-map-one" allowfullscreen></iframe> </section>
<section class="contact-section-one">
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-4 col-lg-4">
              <div class="contact-addon-one text-center">
                  <div class="inner">
                      <div class="icon"> <span class="flaticon-call"></span> </div>
                      <div class="title">
                          <h2>Phone Number</h2>
                      </div>
                      <ul>
                          <li><a href="tel:{{ $settings->phone_number }}">{{ $settings->phone_number }}</a></li>
                      </ul>
                  </div>
                  <div class="button-box"> <a href="javascript:void(0)"><span class="flaticon-right-arrow-3"></span></a> </div>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4">
              <div class="contact-addon-one text-center">
                  <div class="inner">
                      <div class="icon bg2"> <span class="flaticon-envelope"></span> </div>
                      <div class="title">
                          <h2>Support Email</h2>
                      </div>
                      <ul>
                          <li><a href="mailto:{{ $settings->email }}">{{ $settings->email }}</a></li>
                      </ul>
                  </div>
                  <div class="button-box"> <a href="javascript:void(0)"><span class="flaticon-right-arrow-3"></span></a> </div>
              </div>
          </div>
          <div class="col-xl-4 col-lg-4">
              <div class="contact-addon-one text-center">
                  <div class="inner">
                      <div class="icon bg3"> <span class="flaticon-map"></span> </div>
                      <div class="title">
                          <h2>Office Address</h2>
                      </div>
                      <p>{{ $settings->address }}</p>
                  </div>
                  <div class="button-box"> <a href="javascript:void(0)"><span class="flaticon-right-arrow-3"></span></a> </div>
              </div>
          </div>
      </div>
  </div>
</section>
<section class="contact-page-form">
  <div class="theme_container">
      <div class="row">
          <div class="col-xl-6 col-lg-6">
              <div class="contact-page-form-img"> <img src="/images/image1.jpg" alt="" /> </div>
          </div>
          <div class="col-xl-6 col-lg-6">
              <div class="contact-form contact-page">
                  <div class="sec-title">
                      <div class="tagline"> <span class="left"></span>
                          <h6>Write Us</h6>
                      </div>
                      <h2 class="title">Drop Us Some Line</h2>
                  </div>
                  <form id="contact-form" name="contact_form" class="default-form2" action="/frontend/inc/sendmail.php" method="post">
                      <div class="row">
                          <div class="col-xl-6 col-lg-6 col-md-6">
                              <div class="input-box"> <input type="text" name="form_name" value="" placeholder="Enter full name" required="">
                                  <div class="icon"> <span class="flaticon-user"></span> </div>
                              </div>
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-6">
                              <div class="input-box"> <input type="email" name="form_email" value="" placeholder="Enter email address" required="">
                                  <div class="icon"> <span class="flaticon-envelope"></span> </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xl-6 col-lg-6 col-md-6">
                              <div class="input-box"> <input type="text" name="form_phone" value="" placeholder="Enter phone number">
                                  <div class="icon"> <span class="flaticon-call"></span> </div>
                              </div>
                          </div>
                          <div class="col-xl-6 col-lg-6 col-md-6">
                              <div class="select-box mar-t"> <select class="selectmenu wide"> <option selected="selected">Subject</option> <option>Business Growth</option> <option>Sustainability</option> <option>Performance</option> <option>Advanced Analytics</option> <option>Organization</option> <option>Customer Insights</option> <option>Marketing Plan</option> <option>Online Consulting</option> </select>                                            </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xl-12">
                              <div class="input-box"> <textarea name="form_message" placeholder="Enter message" required=""></textarea>
                                  <div class="icon style2"> <span class="flaticon-pen"></span> </div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-xl-12">
                              <div class="button-box"> <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value=""> <button class="theme-btn" type="submit" data-loading-text="Please wait..."> Send Message </button> </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>

@endsection
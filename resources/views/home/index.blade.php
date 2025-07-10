@extends('home.home_master')
@section('home')

  @include('home.homelayout.slider')

  @include('home.homelayout.testimonial')

  @include('home.homelayout.faq')

  <div class="lonyo-content-shape3">
    <img src="assets/images/shape/shape2.svg" alt="">
  </div>

  <section class="lonyo-cta-section bg-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="lonyo-cta-thumb" data-aos="fade-up" data-aos-duration="500">
            <img src="assets/images/v1/cta-thumb.png" alt="">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="lonyo-default-content lonyo-cta-wrap" data-aos="fade-up" data-aos-duration="700">
            <h2>Shop Smarter Anytime, Anywhere</h2>
            <p>Discover a seamless shopping experience with our mobile app. Browse, compare, and order your favorite products from the comfort of your home or on the go.</p>
            <div class="lonyo-cta-info mt-50" data-aos="fade-up" data-aos-duration="900">
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end cta -->



@endsection
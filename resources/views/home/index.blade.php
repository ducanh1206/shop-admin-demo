@extends('home.home_master')
@section('home')

  @include('home.homelayout.slider')
  @include('home.homelayout.product')
  @include('home.homelayout.testimonial')
  @include('home.homelayout.faq')

  {{-- @include('home.homelayout.product_detail') --}}
@endsection
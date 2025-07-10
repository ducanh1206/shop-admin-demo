<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Demo Shopping Page</title>

  <link rel="shortcut icon" href="{{ asset('upload/shopicon.png') }}" type="image/x-icon">
  <link rel="icon" href="{{ asset('upload/shopicon.png') }}" type="image/x-icon">

  


  <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/niceselect.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
  <link href="}https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{ asset('upload2/css/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('upload2/style.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">



  <!-- Code Editor  -->

  <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('frontend/assets/css/app.min.css') }} ">
</head>

<body>

  <div class="preloader">
    <div class="preloader-inner">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <!-- End preloader -->

  <div class="progress-bar-container">
    <div class="progress-bar"></div>
  </div>

  <!-- progress circle -->
  <div class="paginacontainer">
    <div class="progress-wrap">
      <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
      </svg>
      <div class="top-arrow">
        <svg width="12" height="20" viewBox="0 0 9 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0.999999 1L8 8L1 15" stroke="#142D6F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
    </div>
  </div>
  <!-- End All Js -->



  <!-- Mobile Menu -->
  @include('home.body.mobile_menu')
 
  @include('home.body.header')

 

  @yield('home')

  <!-- Footer  -->
  @include('home.body.footer')
  


  <!-- scripts -->
  <script src="{{ asset('frontend/assets/js/jquery-3.7.1.min.js') }}"></script>

  <script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/menu/menu.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/pricing.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/countdown.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/skillbar.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/slick-animation.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/slick-animation.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/faq.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/tabs-slider.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/product-increment.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/niceselect.js') }}"></script>
  <script src="{{ asset('frontend/assets/js/wow.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"></script>
  <script src="{{ asset('frontend/assets/js/slick.js') }}"></script>

  <script src="{{ asset('frontend/assets/js/app.js') }}"></script>



  <script src="{{ asset('upload2/js/jquery-1.11.0.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="{{ asset('upload2/js/plugins.js') }}"></script>
  <script src="{{ asset('upload2/js/script.js') }}"></script>

</body>
</html>
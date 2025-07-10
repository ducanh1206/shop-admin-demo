<div class="lonyo-section-padding position-relative overflow-hidden">

    @include('home.homelayout.product')


    <div class="container">
      <div class="lonyo-section-title">
        <div class="mt-5">
          <div class="text-center">
            <h2>User Reviews</h2>
          </div>
          
        </div>
      </div>
    </div>

    <div class="lonyo-testimonial-slider-init">

      @php
        $review = App\Models\Review::latest()->get();   
      @endphp

      @foreach ($review as $item)
        <div class="lonyo-t-wrap wrap2 light-bg">
          <div class="lonyo-t-ratting">
            <img src="{{asset('frontend/assets/images/shape/star.svg')}}" alt="">
          </div>
          <div class="lonyo-t-text">
            <p>{{ $item->message }}</p>
          </div>
          <div class="lonyo-t-author">
            <div class="lonyo-t-author-thumb">
              <img src="{{ $item->image }}" alt="">
            </div>
            <div class="lonyo-t-author-data">
              <p>{{ $item->name }}</p>
              <span>{{ $item->position }}</span>
            </div>
          </div>
        </div>
      @endforeach

    </div>
    
    <div class="lonyo-t-overlay2">
      <img src="{{asset('frontend/assets/images/v2/overlay.png')}}" alt="">
    </div>
  </div>
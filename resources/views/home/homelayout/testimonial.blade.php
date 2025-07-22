<style>
  .lonyo-t-wrap {
    height: 340px;
    background-color: #f9f9f9;
    border-radius: 12px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    transition: box-shadow 0.3s ease;
  }

  .lonyo-t-wrap:hover {
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  }

  .lonyo-t-ratting {
    height: 24px;
    margin-bottom: 10px;
  }

  .lonyo-t-text {
    flex-grow: 1;
    overflow: hidden;
    margin-bottom: 20px;
  }

  .lonyo-t-text p {
    font-size: 14px;
    line-height: 1.6;
    color: #333;
    display: -webkit-box;
    -webkit-line-clamp: 5;
    -webkit-box-orient: vertical;
    overflow: hidden;
    text-overflow: ellipsis;
    margin: 0;
  }

  .lonyo-t-author {
    margin-top: auto;
    display: flex;
    align-items: center;
  }

  .lonyo-t-author-thumb img {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    object-fit: cover;
    margin-right: 12px;
  }

  .lonyo-t-author-data p {
    font-weight: 600;
    font-size: 14px;
    margin: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 150px;
  }

  .lonyo-t-author-data span {
    font-size: 12px;
    color: #666;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: block;
    max-width: 150px;
  }
</style>

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
          <div class="lonyo-t-ratting mb-2">
            <img src="{{asset('frontend/assets/images/shape/star.svg')}}" alt="">
          </div>
          <div class="lonyo-t-text">
            <p style="word-break: break-word;">{{ Str::limit($item->message, '150', '...') }}</p>
          </div>
          <div class="lonyo-t-author">
            <div class="lonyo-t-author-thumb">
              <img src="{{ $item->image }}" alt="">
            </div>
            <div class="lonyo-t-author-data">
              <p>{{ Str::limit($item->name, '15', '...') }}</p>
              <span>{{ Str::limit($item->position, '15', '...') }}</span>
            </div>
          </div>
        </div>
      @endforeach

    </div>
    
    <div class="lonyo-t-overlay2">
      <img src="{{asset('frontend/assets/images/v2/overlay.png')}}" alt="">
    </div>
  </div>
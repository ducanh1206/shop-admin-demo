<style>
  .lonyo-t-wrap {
    height: 240px;

    border-radius: 12px;

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
    font-size: 16px;
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
    font-size: 16px;
    margin: 0;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    max-width: 150px;
  }

  .lonyo-t-author-data span {
    font-size: 14px;

    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    display: block;
    max-width: 150px;
  }
</style>

<div class="overflow-hidden" style="padding: 10%; background-color: rgb(248, 249, 250);" >

    <div class="container">
      <div class="lonyo-section-title">
          <div class="text-center">
            <h2>User Reviews</h2>
          </div>
      </div>
      
      <div class="lonyo-faq-shape"></div>

      @php
        $review = App\Models\Review::latest()->get();   
      @endphp

      @foreach ($review as $item)
        <div class="lonyo-t-wrap wrap2 bg-white">
          <div class="lonyo-t-author mb-4" >
            <div class="lonyo-t-author-thumb">
              <img src="{{ $item->image }}" alt="" style="border: 2px solid #ccc; border-radius: 50%; object-fit: cover; max-width: 80%; height: 100%;">
            </div>
            <div class="lonyo-t-author-data">
              <p style="text-transform: capitalize; color: black;">{{ Str::limit($item->name, '20', '...') }}</p>
              <span style="text-transform: capitalize; color: gray">{{ Str::limit($item->position, '20', '...') }}</span>
            </div>
          </div>
          <div class="mb-3">
            <img src="{{asset('frontend/assets/images/shape/star.svg')}}" alt="">
          </div>
          <div class="lonyo-t-text">
            <p style="word-break: break-word;">{{ Str::limit($item->message, '200', '...') }}</p>
          </div>
          
        </div>


      @endforeach
      </div>


    </div>


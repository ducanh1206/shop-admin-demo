  <div class="lonyo-section-padding4">
  <div class="container">
    <div class="lonyo-section-title center">
      <h2>Find answers to all questions below</h2>
    </div>
    
    <div class="lonyo-faq-shape"></div>
    @php
        $faq = App\Models\Faq::latest()->get(); 
    @endphp
    
    @foreach ($faq as $item)
        <div class="lonyo-faq-item item2 open">
            <div class="lonyo-faq-header">
            <h4>{{ Str::limit($item->question, 70, '...') }}</h4>
            <div class="lonyo-active-icon">
                <img class="plasicon" src="assets/images/v1/mynus.svg" alt="">
                <img class="mynusicon" src="assets/images/v1/plas.svg" alt="">
            </div>
            </div>
            <div class="lonyo-faq-body body2">
            <p>{{ $item->answer }}</p>
            </div>
        </div>
    @endforeach
</div>
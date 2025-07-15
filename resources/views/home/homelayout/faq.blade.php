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
            <h4>{{ Str::limit($item->question, 140, '...') }}</h4>
        </div>
        <div class="lonyo-faq-body ">
            <p>{{ $item->answer }}</p>
        </div>
        </div>
    @endforeach
</div>
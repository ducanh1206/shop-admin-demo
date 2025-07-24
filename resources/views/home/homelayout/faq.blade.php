<div class="lonyo-section-padding4" style="padding: 10%; background-color: #f8f4ec;">
  <div class="container">
    <div class="lonyo-section-title center">
      <h2 style="color: rgb(216, 171, 116)">Find answers to all questions below</h2>
    </div>

        @php
            $faq = App\Models\FAQs::latest()->get(); 
        @endphp
        
        @foreach ($faq as $item)
            <div class="lonyo-faq-item item2 open">
                <div class="lonyo-faq-header">
                <h4 style="color: rgb(207, 172, 129)">{{ Str::limit($item->question, 140, '...') }}</h4>
            </div>
            <div class="lonyo-faq-body ">
                <p style="color: black">{{ Str::limit($item->answer, 340, '...') }}</p>
            </div>
            </div>
        @endforeach
    </div>
</div>
<div class="bootstrap-tabs product-tabs">
              <div class="">
                <h2 class="text-center mb-5 gradient-text">Products List</h2>

              </div>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">

                  <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4" style="padding-left: 80px; padding-right: 80px;">
                    @php
                        $product = App\Models\Product::latest()->get(); 
                    @endphp

                    @foreach ($product as $item)
                    <div class="col">
                        <div class="product-item card shadow-sm border-0 p-3 h-100">
                            <div href="" title="{{ Str::limit($item->title, 50, '...')}}" class="text-decoration-none text-dark">
                            
                            <img src="{{ $item->image }}" class="tab-image img-fluid rounded"  style="width: 100%; height: 180px; object-fit: contain;" alt="Product Image" style="object-fit: contain;">
                            
                            <h5 class="fw-semibold text-center">{{ Str::limit($item->name, 10, '...')}}</h5>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center mt-2">
                            <span class="price fw-bold fs-5 text-center">{{ Str::limit($item->price, 9, '...') }} VND</span>
                            <a href="#" class="btn btn-sm btn-outline-primary d-flex align-items-center">
                                <iconify-icon icon="uil:shopping-cart" class="me-1">Add to Cart</iconify-icon> 
                            </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                  </div>
                  
                </div>
                
              </div>
            </div>
   



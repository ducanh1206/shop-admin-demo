<div class="bootstrap-tabs product-tabs">
              <div class="">
                <h2 class="text-center mb-5 gradient-text">Products List</h2>

              </div>

              <div class="d-flex justify-content-end pe-5 mb-3">
                      <form method="GET" id="sortForm">
                        <select name="sort" class="form-select" onchange="document.getElementById('sortForm').submit()">
                          <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Latest</option>
                          <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price Increase</option>
                          <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price Decrease</option>
                          <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name from A-Z</option>
                          <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name from Z-A</option>
                        </select>
                      </form>
                    </div>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">

                  <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4" style="padding-left: 80px; padding-right: 80px;">
                    
                    
                    
                    @php
                      $query = App\Models\Product::query();

                      switch (request('sort')) {
                          case 'price_asc':
                              $query->orderBy('price', 'asc');
                              break;
                          case 'price_desc':
                              $query->orderBy('price', 'desc');
                              break;
                          case 'name_asc':
                              $query->orderBy('name', 'asc');
                              break;
                          case 'name_desc':
                              $query->orderBy('name', 'desc');
                              break;
                          default:
                              $query->latest();
                      }

                      $product = $query->get();
                    @endphp

                    @foreach ($product as $item)
                    <div class="col">
                        <div class="product-item card shadow-sm border-0 p-3 h-100">
                            <div href="" title="{{ Str::limit($item->title, 50, '...')}}" class="text-decoration-none text-dark">
                            
                            <img src="{{ $item->image }}" class="card-img-top img-fluid" style="max-width:100%; object-fit: cover;" alt="Product Image">
                            
                            <h5 class="fw-semibold text-center">{{ Str::limit($item->name, 10, '...')}}</h5>
                            </div>
                            
                            <div class="d-flex justify-content-between align-items-center mt-2">
                                <span class="fw-bold text-truncate me-2" style="max-width: 60%;">
                                    {{ Str::limit(number_format($item->price, 0, ',', '.'), 10, '...') }} VND
                                </span>
                                
                                <a href="#" class="btn btn-sm btn-outline-primary d-flex align-items-center flex-shrink-0">
                                    <iconify-icon icon="uil:shopping-cart" class="me-1"></iconify-icon> 
                                    Add to Cart
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                  </div>
                  
                </div>
                
              </div>
            </div>
   



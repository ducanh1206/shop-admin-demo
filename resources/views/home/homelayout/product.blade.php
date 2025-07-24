<style>
.product-item {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 12px;
}

.product-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

</style>
<div style="padding: 10%;">
    <h2 class="text-center mb-5 text-dark">New Product Arrival</h2>

    <div class="d-flex align-items-center gap-2 mb-4 ps-2">
    <label for="sortSelect" class="fw-semibold mb-0 text-dark" style="">Sort by:</label>

    <form method="GET" id="sortForm">
        <select name="sort" id="sortSelect" class="form-select form-select-sm w-auto"
                onchange="document.getElementById('sortForm').submit()">
            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>Latest</option>
            <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price ↑</option>
            <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price ↓</option>
            <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>Name A → Z</option>
            <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Name Z → A</option>
        </select>
    </form>
</div>

    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab">
            <div class="product-grid row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4" >            
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
                    <div class="product-item card p-3" style="border: 2px solid gray; border-radius: 8px;">
                        <a href="" title="{{ Str::limit($item->title, 50, '...')}}" class="">
                        <img src="{{ $item->image }}" class="card-img-top img-fluid" style="max-width:100%; object-fit: cover; border: 2px solid #ccc; border-radius: 8px;" alt="Product Image">
                        </a>
                        <h5 class="text-center text-truncate pt-2" style="text-transform: capitalize; color: black;">{{ Str::limit($item->name, 20, '...')}}</h5>
                        <div class="text-center pt-2">
                            <span class=" d-block text-truncate mb-2" style="color: black">
                                {{ number_format($item->price, 0, ',', '.') }} <span style=" text-decoration-line: underline;">vnđ</span>
                            </span>

                            <a href="#" class="btn btn-sm align-items-center justify-content-center"
                            style="color: black; transition: 0.3s;"
                            onmouseover="this.style.color='white'; this.style.backgroundColor='black';"
                            onmouseout="this.style.color='black'; this.style.backgroundColor='transparent';">
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

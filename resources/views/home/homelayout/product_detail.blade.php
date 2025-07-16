@extends('home.home_master')
@section('home')

<div class="product-detail-container" style="max-width: 900px; margin: auto; padding: 20px; display: flex; flex-wrap: wrap; gap: 30px; border: 1px solid #ccc; border-radius: 10px;">
  <form action="{{ route('product.detail') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <!-- Product Image -->
    <div class="product-image" style="flex: 1 1 300px;">
        <img src="{{ asset('upload/products/example.jpg') }}" alt="Product Image" style="width: 100%; border-radius: 10px;">
    </div>

    <!-- Product Info -->
    <div class="product-info" style="flex: 2 1 400px;">
        <h2 style="margin-bottom: 10px;">{{$product->name}}</h2>
        <p style="font-size: 18px; font-weight: bold; margin-bottom: 15px;">{{ $product->price }}</p>

        <p style="margin-bottom: 20px;">
        {{ $product->details }}
        </p>

        <form action="">
            <input type="hidden" name="product_id" value="1">
            
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" value="1" min="1" style="width: 70px; margin-left: 10px; margin-bottom: 20px;">

            <div>
                <button type="submit" style="padding: 10px 20px; background-color: #007bff; color: white; border: none; border-radius: 5px;">
                Add to Cart
                </button>
            </div>
        </form>
    </div>
    </form>
</div>


@endsection
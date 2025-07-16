<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Http\JsonResponse;

class ProductApiController extends Controller
{
    /**
     * List all products.
     */
    public function index()
    {
        
    }

    public function show(Product $product)
    {
        return response()->json($product);
    }

    public function store(Request $request)
    {
        // Validate and create product
    }

    public function update(Request $request, Product $product)
    {
        // Validate and update product
    }

    public function destroy(Product $product)
    {
        // Delete product
    }
}
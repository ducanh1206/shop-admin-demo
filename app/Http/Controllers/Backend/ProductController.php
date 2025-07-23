<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use App\Http\Controller\Api\ProductApiController;

class ProductController extends Controller
{
    
    public function allProduct () {
        $product = Product::latest()->get();
        return view('admin.backend.product.all_product', compact('product'));
    }

    public function addProduct () {
        return view('admin.backend.product.add_product');
    }

    public function storeProduct (Request $request) {

        $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0|max:1000000000',
            'image' => 'nullable|mimetypes:image/avif,image/jpeg,image/png,image/gif,image/webp,image/bmp,image/svg+xml,image/heic,image/heif|max:2048',

        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            
            $manager = new ImageManager(new Driver());
            // Create a unique name for image 
            $name_generate = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(250,250)->save(public_path('upload/products/'.$name_generate));
            // save url
            $save_url = 'upload/products/'.$name_generate;


            // Create database
            Product::create([
                    'title' => $request->title,
                    'name' => $request->name,
                    'price' => $request->price,
                    'image' => $save_url
                ]);
        }

        // return to route all.product
        return redirect()->route('all.product');
    }

    public function editProduct ($id) {
        $product = Product::find($id);
        return view('admin.backend.product.edit_product', compact('product'));
    }


    public function updateProduct (Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0|max:1000000000',
            'image' => 'nullable|mimetypes:image/avif,image/jpeg,image/png,image/gif,image/webp,image/bmp,image/svg+xml,image/heic,image/heif|max:2048',

        ]);

        $p_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            // Create a unique name for image 
            $name_generate = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(250,250)->save(public_path('upload/products/'.$name_generate));
            // save url
            $save_url = 'upload/products/'.$name_generate;


            // Update database
            Product::find($p_id)->update([
                    'title' => $request->title,
                    'name' => $request->name,
                    'price' => $request->price,
                    'image' => $save_url
                ]);

            // return to route all.product
            return redirect()->route('all.product');
        } else {
            // Update database
            Product::find($p_id)->update([
                    'title' => $request->title,
                    'name' => $request->name,
                    'price' => $request->price,
                ]);

            // return to route all.product
            return redirect()->route('all.product');
        }
     
    }

    public function deleteProduct ($id) {
        $item = Product::find($id);
        $image = $item->image;

        unlink($image);

        $item->delete();

        return redirect()->route('all.product');
    }

}

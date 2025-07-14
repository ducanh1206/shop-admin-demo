<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class ProductController extends Controller
{
    public function AllProduct () {
        $product = Product::latest()->get();
        return view('admin.backend.product.all_product', compact('product'));
    }

    public function AddProduct () {
        return view('admin.backend.product.add_product');
    }

    public function StoreProduct (Request $request) {

        $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
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

    public function EditProduct ($id) {
        $product = Product::find($id);
        return view('admin.backend.product.edit_product', compact('product'));
    }


    public function UpdateProduct (Request $request) {
        $request->validate([
            'title' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
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

    public function DeleteProduct ($id) {
        $item = Product::find($id);
        $image = $item->image;

        unlink($image);

        $item->delete();

        return redirect()->route('all.product');
    }
}

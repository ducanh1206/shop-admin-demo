<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ReviewController extends Controller
{
    public function allReview () {
        $review = Review::latest()->get();
        return view('admin.backend.review.all_review', compact('review'));
    }

    public function addReview () {
        return view('admin.backend.review.add_review');
    }

    public function storeReview (Request $request) {

        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'message' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());
            
            // Create a unique name for image 
            $name_generate = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $img = $manager->read($image);
            $img->resize(60,60)->save(public_path('upload/reviews/'.$name_generate));

            // save url
            $save_url = 'upload/reviews/'.$name_generate;


            // Create database
            Review::create([
                    'name' => $request->name,
                    'position' => $request->position,
                    'message' => $request->message,
                    'image' => $save_url
                ]);
        }

        // return to route all.review
        return redirect()->route('all.review');
    }

    public function editReview ($id) {
        $review = Review::find($id);
        return view('admin.backend.review.edit_review', compact('review'));
    }

    public function updateReview (Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'message' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $rev_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $manager = new ImageManager(new Driver());

            // Update a unique name for image 
            $name_generate = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();

            $img = $manager->read($image);
            $img->resize(60,60)->save(public_path('upload/reviews/'.$name_generate));

            // save url
            $save_url = 'upload/reviews/'.$name_generate;


            // Update database
            Review::find($rev_id)->update([
                    'name' => $request->name,
                    'position' => $request->position,
                    'message' => $request->message,
                    'image' => $save_url
                ]);
            
            // return to route all.review
            return redirect()->route('all.review');
        } else {
            // Create database
            Review::find($rev_id)->update([
                    'name' => $request->name,
                    'position' => $request->position,
                    'message' => $request->message
                ]);
           
            // return to route all.review
            return redirect()->route('all.review');
        }
    
    }

    public function deleteReview ($id) {
        $item = Review::find($id);
        $image = $item->image;
        // Delete image
        unlink($image);

        // Delete review database

        $item->delete();

        // return to route all.review
        return redirect()->route('all.review');
    }
}

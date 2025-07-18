<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;
use App\Http\Resources\ReviewResource;
use Illuminate\Support\Facades\Validator;

class ReviewApiController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        if ($reviews->count() > 0) {
            return ReviewResource::collection($reviews);
        } else {
            return response()->json(['message' => 'No record available.'], 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'message' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed!',
                'error' => $validator->messages(),
            ], 422);
        }

        $imageUrl = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('upload/reviews'), $imageName);
            $imageUrl = asset('upload/reviews/' . $imageName);
        }

        $review = Review::create([
            'name' => $request->name,
            'position' => $request->position,
            'message' => $request->message,
            'image' => $imageUrl,
        ]);

        return response()->json([
            'message' => 'Review created successfully!',
            'data' => new ReviewResource($review),
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $review = Review::findOrFail($id);
        return new ReviewResource($review);
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $review = Review::findOrFail($id);
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'message' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed!',
                'error' => $validator->messages(),
            ], 422);
        }

        $imageUrl = $review->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('upload/reviews'), $imageName);
            $imageUrl = asset('upload/reviews/' . $imageName);
        }

        $review->update([
            'name' => $request->name,
            'position' => $request->position,
            'message' => $request->message,
            'image' => $imageUrl,
        ]);

        return response()->json([
            'message' => 'Review updated successfully!',
            'data' => new ReviewResource($review),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return response()->json([
            'message' => 'Review deleted successfully!',
        ], 200);
    }
}

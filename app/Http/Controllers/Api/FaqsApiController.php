<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQs;
use App\Http\Resources\FaqsResource;
use Illuminate\Support\Facades\Validator;

class FaqsApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = FAQs::get();
        if ($faqs->count() > 0) {
            return FaqsResource::collection($faqs);
        } else {
            return response()->json(['message'=> 'No record available.'], 200);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed!',
                'error' => $validator->messages(),
            ], 422);
        }

        $faq = FAQs::create([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return response()->json([
            'message' => 'FAQ created successfully!',
            'data' => new FaqsResource($faq),
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(FAQs $faq)
    {
        return new FaqsResource($faq);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FAQs $faq)
    {
        $validator = Validator::make($request->all(), [
            'question' => 'required|string',
            'answer' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed!',
                'error' => $validator->messages(),
            ], 422);
        }

        $faq->update([
            'question' => $request->question,
            'answer' => $request->answer,
        ]);

        return response()->json([
            'message' => 'FAQ updated successfully!',
            'data' => new FaqsResource($faq),
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FAQs $faq)
    {
        $faq->delete();

        return response()->json([
            'message' => 'FAQ deleted successfully!',
        ], 200);
    }
}

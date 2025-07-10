<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class FaqController extends Controller
{
    public function AllFaq () {
        $faq = Faq::latest()->get();
        return view('admin.backend.faq.all_faq', compact('faq'));
    }

    public function AddFaq () {
        return view('admin.backend.faq.add_faq');
    }

    public function StoreFaq (Request $request) {

            // Create database
            Faq::create([
                    'question' => $request->question,
                    'answer' => $request->answer,
                ]);

        return redirect()->route('all.faq');
    }

    public function EditFaq ($id) {
        $faq = Faq::find($id);
        return view('admin.backend.faq.edit_faq', compact('faq'));
    }


    public function UpdateFaq (Request $request) {

        $p_id = $request->id;

        Faq::find($p_id)->update([
                    'question' => $request->question,
                    'answer' => $request->answer,
                ]);

        return redirect()->route('all.faq');
     
    }

    public function DeleteFaq ($id) {

        $item->delete();

        return redirect()->route('all.faq');
    }
}

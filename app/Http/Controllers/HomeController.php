<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $faqs = Faq::all();

        $testimonis = Testimoni::all();

        return view('landing-page', compact('faqs', 'testimonis'));
    }

    public function AdditionalQuestion(Request $request){
        $validatedData = $request->validate([
            'question' => 'required|string',
        ]);

        Faq::create([
            'question' => $validatedData['question'],
        ]);

        return redirect()->route('landing-page')->with('success', 'Question submitted successfully!');
    }
}

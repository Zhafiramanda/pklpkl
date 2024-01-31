<?php

namespace App\Http\Controllers;

use App\Charts\AlumniDataChart;
use App\Models\Alumni;
use App\Models\Faq;
use Illuminate\Support\Facades\Validator;
use App\Models\Question;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function Dashboard(AlumniDataChart $chart){

        $AlumniDataChart = $chart->build();

        $alumniCount = Alumni::count();

        $faqCount = Faq::count();

        return view('admin.dashboard', compact('alumniCount','faqCount', 'AlumniDataChart'));
    }

    public function ListAlumni()
    {
        $alumnis = Alumni::latest()->paginate(5);

        return view('admin.list-alumni', compact('alumnis'));
    }

    public function ListPertanyaan()
    {

        $faqs = Faq::orderBy('id', 'asc')->paginate(10);

        $pendingFaqs = Faq::where('status', 'pending')->get();

        return view('admin.list-questions', compact('faqs','pendingFaqs'));
    }

    public function answerFaq(Request $request, $id)
    {
        $this->validate($request, [
            'answer' => 'required|string',
        ]);

        $faqs = Faq::findOrFail($id);

        $faqs->update([
            'answer' => $request->input('answer'),
        ]);

        return redirect()->back()->with('success', 'Jawaban berhasil disimpan.');
    }
    public function approve($id)
    {
        $faqs = Faq::findOrFail($id);
        $faqs->status = 'approved';
        $faqs->save();
        return redirect()->back()->with('success', 'Pertanyaan berhasil disetujui.');
    }

    public function reject($id)
    {
        $faqs = Faq::findOrFail($id);
        $faqs->status = 'rejected';
        $faqs->save();
        return redirect()->back()->with('success', 'Pertanyaan berhasil ditolak.');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::latest()->get();
        return view('admin.faq.index', compact('faqs'));
    }

    // Show create form
    public function create()
    {
        return view('admin.faq.create');
    }

    // Store FAQ
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:255',
            'question' => 'required|string|max:255',
            'answer' => 'required'
        ]);

        Faq::create([
            'type' => $request->type,
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        return redirect()->route('admin.faq')->with('success','FAQ Added Successfully');
    }

    // Show edit form
    public function edit($id)
    {
        $faq = Faq::findOrFail($id);
        return view('admin.faq.edit', compact('faq'));
    }

    // Update FAQ
    public function update(Request $request, $id)
    {
        $faq = Faq::findOrFail($id);

        $request->validate([
            'type' => 'required|string|max:255',
            'question' => 'required|string|max:255',
            'answer' => 'required'
        ]);

        $faq->update([
            'type' => $request->type,
            'question' => $request->question,
            'answer' => $request->answer
        ]);

        return redirect()->route('admin.faq')->with('success','FAQ Updated Successfully');
    }

    // Delete FAQ
    public function destroy($id)
    {
        $faq = Faq::findOrFail($id);
        $faq->delete();

        return redirect()->route('admin.faq')->with('success','FAQ Deleted Successfully');
    }
}

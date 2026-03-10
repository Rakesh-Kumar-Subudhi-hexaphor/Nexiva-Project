<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
 public function contact()
    {
        $newses = Newsletter::all();
        return view('admin.newsletter.index', compact('newses'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $news = new Newsletter();
        $news->email = $request->email;
        $news->save();

        return redirect()->back()->with('success', 'Thank you for subscribing!');
    }
    public function delete($id)
    {
        $newsletter = Newsletter::find($id);
        $newsletter->delete();
        return redirect()->back()->with('success', 'Newsletter Deleted successfully!');
    }
 
}

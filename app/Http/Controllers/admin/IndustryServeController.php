<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\IndustryServe;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class IndustryServeController extends Controller
{
    public function index()
    {
        $industries = IndustryServe::latest()->get();
        return view('admin.industry_serve.index', compact('industries'));
    }

    // Show create form
    public function create()
    {
        return view('admin.industry_serve.create');
    }

    // Store service
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'short_desc' => 'required'
        ]);

        $slug = Str::slug($request->title);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/industry_serve'), $imageName);
        }

        IndustryServe::create([
            'title' => $request->title,
            'slug' => $slug,
            'tags' => $request->tags,
            'icon' => $request->icon,
            'image' => $imageName,
            'short_desc' => $request->short_desc,
            'description' => $request->description
        ]);

        return redirect()->route('admin.industry-serve')->with('success','Industry Serve Created Successfully');
    }

    // Edit form
    public function edit($id)
    {
        $industry = IndustryServe::findOrFail($id);
        return view('admin.industry_serve.edit', compact('industry'));
    }

    // Update service
    public function update(Request $request, $id)
    {
        $industry = IndustryServe::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'short_desc' => 'required'
        ]);

        $slug = Str::slug($request->title);

        $imageName = $industry->image;

        if ($request->hasFile('image')) {

            if ($industry->image && file_exists(public_path('uploads/industry_serve/'.$industry->image))) {
                unlink(public_path('uploads/industry_serve/'.$industry->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/industry_serve'), $imageName);
        }

        $industry->update([
            'title' => $request->title,
            'slug' => $slug,
            'tags' => $request->tags,
            'icon' => $request->icon,
            'image' => $imageName,
            'short_desc' => $request->short_desc,
            'description' => $request->description
        ]);

        return redirect()->route('admin.industry-serve')->with('success','Industry Serve Updated Successfully');
    }

    // Delete
    public function destroy($id)
    {
        $industry = IndustryServe::findOrFail($id);

        if ($industry->image && file_exists(public_path('uploads/industry_serve/'.$industry->image))) {
            unlink(public_path('uploads/industry_serve/'.$industry->image));
        }

        $industry->delete();

        return redirect()->route('admin.industry-serve')->with('success','Industry Serve Deleted Successfully');
    }
}

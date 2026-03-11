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
        return view('admin.industry-serve.index', compact('industries'));
    }

    // Show create form
    public function create()
    {
        return view('admin.industry-serve.create');
    }

    // Store service
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'short_desc' => 'required'
        ]);

        $slug = Str::slug($request->title);

        $imagePath = null;
        $iconPath = null;

        if ($request->hasFile('image')) {

            $imageName = rand() . '_image.' . $request->image->extension();

            $request->image->move(public_path('uploads/industry_serve/images'), $imageName);

            $imagePath = 'uploads/industry_serve/images/' . $imageName;
        }

        if ($request->hasFile('icon')) {

            $iconName = rand() . '_icon.' . $request->icon->extension();

            $request->icon->move(public_path('uploads/industry_serve/icons'), $iconName);

            $iconPath = 'uploads/industry_serve/icons/' . $iconName;
        }

        IndustryServe::create([
            'title' => $request->title,
            'slug' => $slug,
            'tags' => $request->tags_hidden,
            'icon' => $iconPath,
            'image' => $imagePath,
            'short_desc' => $request->short_desc,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'description' => $request->description
        ]);

        return redirect()->route('admin.industry-serve')->with('success', 'Industry Serve Created Successfully');
    }

    // Edit form
    public function show($id)
    {
        $industry = IndustryServe::findOrFail($id);
        return view('admin.industry-serve.edit', compact('industry'));
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
        $imagePath = $industry->image;
        $iconPath = $industry->icon;

        // Update Image
        if ($request->hasFile('image')) {

            if ($industry->image && file_exists(public_path($industry->image))) {
                unlink(public_path($industry->image));
            }

            $imageName = time() . '_image.' . $request->image->extension();

            $request->image->move(public_path('uploads/industry_serve/images'), $imageName);

            $imagePath = 'uploads/industry_serve/images/' . $imageName;
        }

        // Update Icon
        if ($request->hasFile('icon')) {

            if ($industry->icon && file_exists(public_path($industry->icon))) {
                unlink(public_path($industry->icon));
            }

            $iconName = time() . '_icon.' . $request->icon->extension();

            $request->icon->move(public_path('uploads/industry_serve/icons'), $iconName);

            $iconPath = 'uploads/industry_serve/icons/' . $iconName;
        }

        $industry->update([
            'title' => $request->title,
            'slug' => $slug,
            'tags' => $request->tags_hidden,
            'icon' => $iconPath,
            'image' => $imagePath,
            'short_desc' => $request->short_desc,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'description' => $request->description
        ]);

        return redirect()->route('admin.industry-serve')->with('success', 'Industry Serve Updated Successfully');
    }

    // Delete
    public function destroy($id)
    {
        $industry = IndustryServe::findOrFail($id);

        if ($industry->image && file_exists(public_path($industry->image))) {
            unlink(public_path($industry->image));
        }

        if ($industry->icon && file_exists(public_path($industry->icon))) {
            unlink(public_path($industry->icon));
        }

        $industry->delete();

        return redirect()->route('admin.industry-serve')->with('success', 'Industry Serve Deleted Successfully');
    }
}

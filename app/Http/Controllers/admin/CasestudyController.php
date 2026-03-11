<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Casestudy;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class CasestudyController extends Controller
{
    public function index()
    {
        $casestudies = Casestudy::latest()->get();
        return view('admin.casestudy.index', compact('casestudies'));
    }

    // Show create form
    public function create()
    {
        $services = Service::all();
        return view('admin.casestudy.create', compact('services'));
    }

    // Store data
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'meta_title' => 'nullable|max:255',
            'meta_desc' => 'nullable',
            'description' => 'required',
        ]);

        $imagePath = null;
        $iconPath = null;

        // Upload Image
        if ($request->hasFile('image')) {

            $imageName = rand() . '_image.' . $request->image->extension();

            $request->image->move(public_path('uploads/casestudy/images'), $imageName);

            $imagePath = 'uploads/casestudy/images/' . $imageName;
        }

        // Upload Icon
        if ($request->hasFile('icon')) {

            $iconName = rand() . '_icon.' . $request->icon->extension();

            $request->icon->move(public_path('uploads/casestudy/icons'), $iconName);

            $iconPath = 'uploads/casestudy/icons/' . $iconName;
        }

        $slug = Str::slug($request->title);

        Casestudy::create([
            'title' => $request->title,
            'slug' => $slug,
            'image' => $imagePath,
            'icon' => $iconPath,
            'service' => $request->service,
            'url' => $request->url,
            'client' => $request->client,
            'date' => $request->date,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'short_desc' => $request->short_desc,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.casestudy')->with('success', 'Casestudy Created Successfully');
    }

    // Show edit form
    public function edit($id)
    {
        $casestudy = Casestudy::findOrFail($id);
        $services = Service::all();

        return view('admin.casestudy.edit', compact('casestudy', 'services'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $casestudy = Casestudy::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'meta_title' => 'nullable|max:255',
            'meta_desc' => 'nullable',
            'description' => 'required',
        ]);

    
        $imagePath = $casestudy->image;
        $iconPath = $casestudy->icon;

        // Update Image
        if ($request->hasFile('image')) {

            if ($casestudy->image && file_exists(public_path($casestudy->image))) {
                unlink(public_path($casestudy->image));
            }

            $imageName = rand() . '_image.' . $request->image->extension();

            $request->image->move(public_path('uploads/casestudy/images'), $imageName);

            $imagePath = 'uploads/casestudy/images/' . $imageName;
        }

        // Update Icon
        if ($request->hasFile('icon')) {

            if ($casestudy->icon && file_exists(public_path($casestudy->icon))) {
                unlink(public_path($casestudy->icon));
            }

            $iconName = rand() . '_icon.' . $request->icon->extension();

            $request->icon->move(public_path('uploads/casestudy/icons'), $iconName);

            $iconPath = 'uploads/casestudy/icons/' . $iconName;
        }

        $slug = Str::slug($request->title);

        $casestudy->update([
            'title' => $request->title,
            'slug' => $slug,
            'image' => $imagePath,
            'icon' => $iconPath,
            'service' => $request->service,
            'url' => $request->url,
            'client' => $request->client,
            'date' => $request->date,
            'short_desc' => $request->short_desc,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.casestudy')->with('success', 'Casestudy Updated Successfully');
    }

    // Delete record
    public function destroy($id)
    {
        $casestudy = Casestudy::findOrFail($id);

        if ($casestudy->image && file_exists(public_path($casestudy->image))) {
            unlink(public_path($casestudy->image));
        }

        if ($casestudy->icon && file_exists(public_path($casestudy->icon))) {
            unlink(public_path($casestudy->icon));
        }

        $casestudy->delete();

        return redirect()->route('admin.casestudy')->with('success', 'Casestudy Deleted Successfully');
    }
}

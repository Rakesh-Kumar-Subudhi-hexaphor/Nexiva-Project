<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        return view('admin.service.index', compact('services'));
    }

    // Show create form
    public function create()
    {
        return view('admin.service.create');
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

            $request->image->move(public_path('uploads/services/images'), $imageName);

            $imagePath = 'uploads/services/images/' . $imageName;
        }

        // Upload Icon
        if ($request->hasFile('icon')) {

            $iconName = rand() . '_icon.' . $request->icon->extension();

            $request->icon->move(public_path('uploads/services/icons'), $iconName);

            $iconPath = 'uploads/services/icons/' . $iconName;
        }


        Service::create([
            'title' => $request->title,
            'slug' => $slug,
            'icon' => $iconPath,
            'image' => $imagePath,
            'short_desc' => $request->short_desc,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'description' => $request->description
        ]);

        return redirect()->route('admin.service')->with('success', 'Service Created Successfully');
    }

    // Edit form
    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    // Update service
    public function update(Request $request, $id)
    {
        $service = Service::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'short_desc' => 'required'
        ]);

        $slug = Str::slug($request->title);

        $imagePath = $service->image;
        $iconPath = $service->icon;

        if ($request->hasFile('image')) {

            if ($service->image && file_exists(public_path($service->image))) {
                unlink(public_path($service->image));
            }

            $imageName = rand() . '_image.' . $request->image->extension();

            $request->image->move(public_path('uploads/services/images'), $imageName);

            $imagePath = 'uploads/services/images/' . $imageName;
        }

        // Update Icon
        if ($request->hasFile('icon')) {

            if ($service->icon && file_exists(public_path($service->icon))) {
                unlink(public_path($service->icon));
            }

            $iconName = rand() . '_icon.' . $request->icon->extension();

            $request->icon->move(public_path('uploads/services/icons'), $iconName);

            $iconPath = 'uploads/services/icons/' . $iconName;
        }

        $service->update([
            'title' => $request->title,
            'slug' => $slug,
            'icon' => $iconPath,
            'image' => $imagePath,
            'short_desc' => $request->short_desc,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'description' => $request->description
        ]);

        return redirect()->route('admin.service')->with('success', 'Service Updated Successfully');
    }

    // Delete
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        if ($service->image && file_exists(public_path($service->image))) {
            unlink(public_path($service->image));
        }

        if ($service->icon && file_exists(public_path($service->icon))) {
            unlink(public_path($service->icon));
        }

        $service->delete();

        return redirect()->route('admin.service')->with('success', 'Service Deleted Successfully');
    }
}

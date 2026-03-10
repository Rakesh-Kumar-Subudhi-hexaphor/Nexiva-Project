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

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/services'), $imageName);
        }

        Service::create([
            'title' => $request->title,
            'slug' => $slug,
            'icon' => $request->icon,
            'image' => $imageName,
            'short_desc' => $request->short_desc,
            'description' => $request->description
        ]);

        return redirect()->route('admin.service')->with('success','Service Created Successfully');
    }

    // Edit form
    public function edit($id)
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

        $imageName = $service->image;

        if ($request->hasFile('image')) {

            if ($service->image && file_exists(public_path('uploads/services/'.$service->image))) {
                unlink(public_path('uploads/services/'.$service->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/services'), $imageName);
        }

        $service->update([
            'title' => $request->title,
            'slug' => $slug,
            'icon' => $request->icon,
            'image' => $imageName,
            'short_desc' => $request->short_desc,
            'description' => $request->description
        ]);

        return redirect()->route('admin.service')->with('success','Service Updated Successfully');
    }

    // Delete
    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        if ($service->image && file_exists(public_path('uploads/services/'.$service->image))) {
            unlink(public_path('uploads/services/'.$service->image));
        }

        $service->delete();

        return redirect()->route('admin.service')->with('success','Service Deleted Successfully');
    }
}

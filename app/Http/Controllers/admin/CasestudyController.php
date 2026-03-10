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
            'slug' => 'required|unique:projects,slug',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/casestudies'), $imageName);
        }

         $slug = Str::slug($request->title);
         
        Casestudy::create([
            'title' => $request->title,
            'slug' => $slug,
            'image' => $imageName,
            'service' => $request->service, 
            'url' => $request->url,
            'client' => $request->client,
            'date' => $request->date,
            'short_desc' => $request->short_desc,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.casestudies')->with('success','Casestudy Created Successfully');
    }

    // Show edit form
    public function edit($id)
    {
        $casestudy = Casestudy::findOrFail($id);
        $services = Service::all();

        return view('admin.casestudy.edit', compact('casestudy','services'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $casestudy = Casestudy::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|unique:casestudies,slug,'.$id,
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'description' => 'required',
        ]);

        $imageName = $casestudy->image;

        if ($request->hasFile('image')) {

            // delete old image
            if (file_exists(public_path('uploads/casestudies/'.$casestudy->image))) {
                unlink(public_path('uploads/casestudies/'.$casestudy->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/casestudies'), $imageName);
        }
         $slug = Str::slug($request->title);

        $casestudy->update([
            'title' => $request->title,
            'slug' => $slug,
            'image' => $imageName,
            'service' => $request->service,
            'url' => $request->url,
            'client' => $request->client,
            'date' => $request->date,
            'short_desc' => $request->short_desc,
            'description' => $request->description,
        ]);

        return redirect()->route('admin.casestudies')->with('success','Casestudy Updated Successfully');
    }

    // Delete record
    public function destroy($id)
    {
        $casestudy = Casestudy::findOrFail($id);

        if (file_exists(public_path('uploads/casestudies/'.$casestudy->image))) {
            unlink(public_path('uploads/casestudies/'.$casestudy->image));
        }

        $casestudy->delete();

        return redirect()->route('admin.casestudies')->with('success','Casestudy Deleted Successfully');
    }
}

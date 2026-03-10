<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Certification;
use Illuminate\Http\Request;

class CertificationController extends Controller
{
     public function index()
    {
        $certifications = Certification::latest()->get();
        return view('admin.certification.index', compact('certifications'));
    }

    public function create()
    {
        return view('admin.certification.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/certifications'), $imageName);
        }

        Certification::create([
            'name' => $request->name,
            'image' => $imageName
        ]);

        return redirect()->route('admin.certification')->with('success','Certification Added Successfully');
    }

    public function edit($id)
    {
        $certification = Certification::findOrFail($id);
        return view('admin.certification.edit', compact('certification'));
    }

    public function update(Request $request, $id)
    {
        $certification = Certification::findOrFail($id);

        $request->validate([
            'name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $imageName = $certification->image;

        if ($request->hasFile('image')) {

            // delete old image
            if (file_exists(public_path('uploads/certifications/'.$certification->image))) {
                unlink(public_path('uploads/certifications/'.$certification->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/certifications'), $imageName);
        }

        $certification->update([
            'name' => $request->name,
            'image' => $imageName
        ]);

        return redirect()->route('admin.certification')->with('success','Certification Updated Successfully');
    }

    public function destroy($id)
    {
        $certification = Certification::findOrFail($id);

        if (file_exists(public_path('uploads/certifications/'.$certification->image))) {
            unlink(public_path('uploads/certifications/'.$certification->image));
        }

        $certification->delete();

        return redirect()->route('admin.certification')->with('success','Certification Deleted Successfully');
    }
}

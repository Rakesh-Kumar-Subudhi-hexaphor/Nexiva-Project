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
        // Upload Image
        if ($request->hasFile('image')) {

            $imageName = rand().'_image.'.$request->image->extension();

            $request->image->move(public_path('uploads/certifications'), $imageName);

            $imagePath = 'uploads/certifications/'.$imageName;
        }

        Certification::create([
            'name' => $request->name,
            'image' => $imagePath
        ]);

        return redirect()->route('admin.certification')->with('success','Certification Added Successfully');
    }

    public function show($id)
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

        $imagePath = $certification->image;

       if ($request->hasFile('image')) {

            if ($certification->image && file_exists(public_path($certification->image))) {
                unlink(public_path($certification->image));
            }

            $imageName = rand().'_image.'.$request->image->extension();

            $request->image->move(public_path('uploads/certifications'), $imageName);

            $imagePath = 'uploads/certifications/'.$imageName;
        }

        $certification->update([
            'name' => $request->name,
            'image' => $imagePath
        ]);

        return redirect()->route('admin.certification')->with('success','Certification Updated Successfully');
    }

    public function destroy($id)
    {
        $certification = Certification::findOrFail($id);

       
        if ($certification->image && file_exists(public_path($certification->image))) {
            unlink(public_path($certification->image));
        }

        $certification->delete();

        return redirect()->route('admin.certification')->with('success','Certification Deleted Successfully');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Collaborator;
use Illuminate\Http\Request;

class CollaboratorController extends Controller
{
     public function index()
    {
        $collaborators = Collaborator::latest()->get();
        return view('admin.collaborator.index', compact('collaborators'));
    }

    public function create()
    {
        return view('admin.collaborator.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'nullable|string|max:255',
            'logo' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $logoName = null;

        if ($request->hasFile('logo')) {
            $logoName = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('uploads/collaborators'), $logoName);
        }

        Collaborator::create([
            'name' => $request->name,
            'logo' => $logoName
        ]);

        return redirect()->route('admin.collaborator')->with('success','Collaborator Added Successfully');
    }

    public function edit($id)
    {
        $collaborator = Collaborator::findOrFail($id);
        return view('admin.collaborator.edit', compact('collaborator'));
    }

    public function update(Request $request, $id)
    {
        $collaborator = Collaborator::findOrFail($id);

        $request->validate([
            'name' => 'nullable|string|max:255',
            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        $logoName = $collaborator->logo;

        if ($request->hasFile('logo')) {

            // delete old logo
            if (file_exists(public_path('uploads/collaborators/'.$collaborator->logo))) {
                unlink(public_path('uploads/collaborators/'.$collaborator->logo));
            }

            $logoName = time().'.'.$request->logo->extension();
            $request->logo->move(public_path('uploads/collaborators'), $logoName);
        }

        $collaborator->update([
            'name' => $request->name,
            'logo' => $logoName
        ]);

        return redirect()->route('admin.collaborator')->with('success','Collaborator Updated Successfully');
    }

    public function destroy($id)
    {
        $collaborator = Collaborator::findOrFail($id);

        if (file_exists(public_path('uploads/collaborators/'.$collaborator->logo))) {
            unlink(public_path('uploads/collaborators/'.$collaborator->logo));
        }

        $collaborator->delete();

        return redirect()->route('admin.collaborator')->with('success','Collaborator Deleted Successfully');
    }
}

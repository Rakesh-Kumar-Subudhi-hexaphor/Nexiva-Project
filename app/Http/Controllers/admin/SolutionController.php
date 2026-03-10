<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Solution;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class SolutionController extends Controller
{
     public function index()
    {
        $solutions = Solution::latest()->get();
        return view('admin.solutions.index', compact('solutions'));
    }

    // Create
    public function create()
    {
        return view('admin.solutions.create');
    }

    // Store
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'required',
            'image' => 'required|image',
            'short_desc' => 'required',
            'description' => 'required'
        ]);

        $slug = Str::slug($request->title);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/solutions'), $imageName);
        }

        Solution::create([
            'title' => $request->title,
            'slug' => $slug,
            'icon' => $request->icon,
            'image' => $imageName,
            'key_point' => $request->key_point,
            'short_desc' => $request->short_desc,
            'description' => $request->description
        ]);

        return redirect()->route('solutions.index')->with('success','Solution Created');
    }

    // Edit
    public function edit($id)
    {
        $solution = Solution::findOrFail($id);
        return view('admin.solutions.edit', compact('solution'));
    }

    // Update
    public function update(Request $request, $id)
    {
        $solution = Solution::findOrFail($id);

        $slug = Str::slug($request->title);

        $imageName = $solution->image;

        if ($request->hasFile('image')) {

            if (file_exists(public_path('uploads/solutions/'.$solution->image))) {
                unlink(public_path('uploads/solutions/'.$solution->image));
            }

            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/solutions'), $imageName);
        }

        $solution->update([
            'title' => $request->title,
            'slug' => $slug,
            'icon' => $request->icon,
            'image' => $imageName,
            'key_point' => $request->key_point,
            'short_desc' => $request->short_desc,
            'description' => $request->description
        ]);

        return redirect()->route('solutions.index')->with('success','Solution Updated');
    }

    // Delete
    public function destroy($id)
    {
        $solution = Solution::findOrFail($id);

        if (file_exists(public_path('uploads/solutions/'.$solution->image))) {
            unlink(public_path('uploads/solutions/'.$solution->image));
        }

        $solution->delete();

        return redirect()->route('solutions.index')->with('success','Solution Deleted');
    }
}

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
        return view('admin.solution.index', compact('solutions'));
    }

    public function create()
    {
        return view('admin.solution.create');
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'icon' => 'required|image',
            'image' => 'required|image',
            'short_desc' => 'required',
            'meta_title' => 'nullable|max:255',
            'meta_desc' => 'nullable',
            'description' => 'required'
        ]);

        $slug = Str::slug($request->title);

        $imagePath = null;
        $iconPath = null;

        // Upload Image
        if ($request->hasFile('image')) {

            $imageName = rand().'_image.'.$request->image->extension();

            $request->image->move(public_path('uploads/solutions/images'), $imageName);

            $imagePath = 'uploads/solutions/images/'.$imageName;
        }

        // Upload Icon
        if ($request->hasFile('icon')) {

            $iconName = rand().'_icon.'.$request->icon->extension();

            $request->icon->move(public_path('uploads/solutions/icons'), $iconName);

            $iconPath = 'uploads/solutions/icons/'.$iconName;
        }

        Solution::create([
            'title' => $request->title,
            'slug' => $slug,
            'icon' => $iconPath,
            'image' => $imagePath,
            'key_point' => $request->key_point,
            'short_desc' => $request->short_desc,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'description' => $request->description
        ]);

        return redirect()->route('admin.solution')->with('success','Solution Created');
    }


    // EDIT
    public function show($id)
    {
        $solution = Solution::findOrFail($id);
        return view('admin.solution.edit', compact('solution'));
    }


    // UPDATE
    public function update(Request $request, $id)
    {
        $solution = Solution::findOrFail($id);

        $slug = Str::slug($request->title);

        $imagePath = $solution->image;
        $iconPath = $solution->icon;

        // Update Image
        if ($request->hasFile('image')) {

            if ($solution->image && file_exists(public_path($solution->image))) {
                unlink(public_path($solution->image));
            }

            $imageName = time().'_image.'.$request->image->extension();

            $request->image->move(public_path('uploads/solutions/images'), $imageName);

            $imagePath = 'uploads/solutions/images/'.$imageName;
        }

        // Update Icon
        if ($request->hasFile('icon')) {

            if ($solution->icon && file_exists(public_path($solution->icon))) {
                unlink(public_path($solution->icon));
            }

            $iconName = time().'_icon.'.$request->icon->extension();

            $request->icon->move(public_path('uploads/solutions/icons'), $iconName);

            $iconPath = 'uploads/solutions/icons/'.$iconName;
        }

        $solution->update([
            'title' => $request->title,
            'slug' => $slug,
            'icon' => $iconPath,
            'image' => $imagePath,
            'key_point' => $request->key_point,
            'short_desc' => $request->short_desc,
            'meta_title' => $request->meta_title,
            'meta_desc' => $request->meta_desc,
            'description' => $request->description
        ]);

        return redirect()->route('admin.solution')->with('success','Solution Updated');
    }


    // DELETE
    public function destroy($id)
    {
        $solution = Solution::findOrFail($id);

        if ($solution->image && file_exists(public_path($solution->image))) {
            unlink(public_path($solution->image));
        }

        if ($solution->icon && file_exists(public_path($solution->icon))) {
            unlink(public_path($solution->icon));
        }

        $solution->delete();

        return redirect()->route('admin.solution')->with('success','Solution Deleted');
    }
}
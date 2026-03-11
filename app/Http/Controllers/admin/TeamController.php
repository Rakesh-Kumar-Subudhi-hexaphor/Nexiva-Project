<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class TeamController extends Controller
{
     public function index()
    {
        $teams = Team::latest()->get();
        return view('admin.team.index', compact('teams'));
    }

    // Create form
    public function create()
    {
        return view('admin.team.create');
    }

    // Store team
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'email' => 'required|email',
            'designation' => 'required',
            'image' => 'required|image',
            'short_desc' => 'required'
        ]);

        $slug = Str::slug($request->title);

        $imagePath = null;

 if ($request->hasFile('image')) {

            $imageName = rand().'_image.'.$request->image->extension();

            $request->image->move(public_path('uploads/teams'), $imageName);

            $imagePath = 'uploads/teams/'.$imageName;
        }

        Team::create([
            'title' => $request->title,
            'slug' => $slug,
            'email' => $request->email,
            'designation' => $request->designation,
            'image' => $imagePath,
            'short_desc' => $request->short_desc
        ]);

        return redirect()->route('admin.team')->with('success','Team Member Added Successfully');
    }

    // Edit form
    public function show($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.team.edit', compact('team'));
    }

    // Update team
    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'email' => 'required|email',
            'designation' => 'required',
            'short_desc' => 'required'
        ]);

        $slug = Str::slug($request->title);

        $imagePath = $team->image;

        if ($request->hasFile('image')) {

            if ($team->image && file_exists(public_path('uploads/teams/'.$team->image))) {
                unlink(public_path('uploads/teams/'.$team->image));
            }

            $imageName = rand().'.'.$request->image->extension();
            $request->image->move(public_path('uploads/teams'), $imageName);
            $imagePath = 'uploads/teams/'.$imageName;
        }

        $team->update([
            'title' => $request->title,
            'slug' => $slug,
            'email' => $request->email,
            'designation' => $request->designation,
            'image' => $imagePath,
            'short_desc' => $request->short_desc
        ]);

        return redirect()->route('admin.team')->with('success','Team Member Updated Successfully');
    }

    // Delete team
    public function destroy($id)
    {
        $team = Team::findOrFail($id);

        if ($team->image && file_exists(public_path($team->image))) {
            unlink(public_path($team->image));
        }

        $team->delete();

        return redirect()->route('admin.team')->with('success','Team Member Deleted Successfully');
    }
}

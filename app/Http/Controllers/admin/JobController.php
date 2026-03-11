<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Job;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = Job::latest()->get();
        return view('admin.job.index', compact('jobs'));
    }

    // Show create form
    public function create()
    {
        return view('admin.job.create');
    }

    // Store job
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'requirement' => 'required',
            'description' => 'required'
        ]);

        $slug = Str::slug($request->title);

        Job::create([
            'title' => $request->title,
            'slug' => $slug,
            'location' => $request->location,
            'type' => $request->type,
            'requirement' => $request->requirement,
            'description' => $request->description,
            'status' => 'active',

        ]);

        return redirect()->route('admin.job')->with('success', 'Job Created Successfully');
    }

    // Edit form
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('admin.job.edit', compact('job'));
    }

    // Update job
    public function update(Request $request, $id)
    {
        $job = Job::findOrFail($id);

        $request->validate([
            'title' => 'required|max:255',
            'requirement' => 'required',
            'description' => 'required'
        ]);

        $slug = Str::slug($request->title);

        $job->update([
            'title' => $request->title,
            'slug' => $slug,
            'location' => $request->location,
            'type' => $request->type,
            'requirement' => $request->requirement,
            'description' => $request->description,

        ]);

        return redirect()->route('admin.job')->with('success', 'Job Updated Successfully');
    }

    // Delete job
    public function delete($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect()->route('admin.job')->with('success', 'Job Deleted Successfully');
    }

    public function changeStatus(Request $request, $id)
    {
        $job = Job::findOrFail($id);
        $job->status = $request->status ? 'active' : 'inactive';
        $job->save();
        return back();
    }
}

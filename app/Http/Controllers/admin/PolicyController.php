<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    public function index()
    {
        $policies = Policy::latest()->get();
        return view('admin.policy.index', compact('policies'));
    }
    public function create()
    {
        return view('admin.policy.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'type'       => 'required|string|max:255',
            'description' => 'required',
            'meta_title'  => 'nullable|string|max:255',
            'meta_desc'   => 'nullable|string',
        ]);

        Policy::create([
            'type'       => $request->type,
            'description' => $request->description,
            'meta_title'  => $request->meta_title,
            'meta_desc'   => $request->meta_desc,
        ]);

        return redirect()->route('admin.policy')
            ->with('success', 'Policy added successfully!');
    }


    public function destroy($id)
    {
        $policy = Policy::findOrFail($id);
        $policy->delete();

        return redirect()->back()->with('message', 'Policy deleted successfully');
    }

    public function show($id)
    {

        $policy = Policy::find($id);
        return view('admin.policy.edit', compact('policy'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required',
            'description' => 'required',
            'meta_title'  => 'nullable|string|max:255',
            'meta_desc'   => 'nullable|string',
        ]);

        $policy = Policy::findOrFail($id);

        $policy->type       = $request->type;
        $policy->description = $request->description;
        $policy->meta_title  = $request->meta_title;
        $policy->meta_desc   = $request->meta_desc;
        $policy->save();

        return redirect()->route('admin.policy')
            ->with('success', 'Policy updated successfully!');
    }
}

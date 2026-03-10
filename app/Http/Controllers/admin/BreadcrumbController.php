<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Breadcrumb;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BreadcrumbController extends Controller
{
    public function index()
    {
        $breadcrumbs = Breadcrumb::latest()->get();
        return view('admin.breadcrumb.index', compact('breadcrumbs'));
    }
    public function create()
    {
        return view('admin.breadcrumb.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'page_id'       => 'required',
            'image'  => 'required',
        ]);
        $image = $request->file('image');
        $imageName = uniqid() . '_' . $image->getClientOriginalName();
        $image->move(public_path('breadcrumb_img'), $imageName);

        Breadcrumb::create([
            'page_id'       => $request->page_id,
            'subHeading'       => $request->subHeading,
            'image'       => 'breadcrumb_img/' . $imageName,
        ]);

        return redirect()->route('admin.breadcrumb')
            ->with('success', 'Breadcrumb added successfully!');
    }


    public function destroy($id)
    {
        $breadcrumb = Breadcrumb::findOrFail($id);
        if ($breadcrumb->image && File::exists(public_path($breadcrumb->image))) {
            File::delete(public_path($breadcrumb->image));
        }
        $breadcrumb->delete();

        return redirect()->back()->with('message', 'Breadcrumb deleted successfully');
    }

    public function show($id)
    {

        $breadcrumb = Breadcrumb::find($id);
        return view('admin.breadcrumb.edit', compact('breadcrumb'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'page_id' => 'required',
            'image' => 'nullable|image',
        ]);
        $breadcrumb = Breadcrumb::findOrFail($id);
        if ($request->hasFile('image')) {
            if ($breadcrumb->image && File::exists(public_path($breadcrumb->image))) {
                File::delete(public_path($breadcrumb->image));
            }

            $image = $request->file('image');
            $imageName = rand() . '_' . $image->getClientOriginalName();
            $image->move(public_path('breadcrumb_img'), $imageName);
            $breadcrumb->image = 'breadcrumb_img/' . $imageName;
        }

        $breadcrumb->page_id       = $request->page_id;
        $breadcrumb->subHeading       = $request->subHeading;

        $breadcrumb->save();

        return redirect()->route('admin.breadcrumb')
            ->with('success', 'Breadcrumb updated successfully!');
    }
}

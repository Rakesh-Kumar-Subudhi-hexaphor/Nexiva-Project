<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Seo;
use Illuminate\Http\Request;

class SeoController extends Controller
{
    public function index()
    {
        $seos = Seo::latest()->get();
        return view('admin.seo.index', compact('seos'));
    }
    public function create()
    {
        return view('admin.seo.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'page_id'       => 'required',
            'meta_title'  => 'required|string',
            'meta_desc'  => 'required',
        ]);

        Seo::create([
            'page_id'       => $request->page_id,
            'meta_title'       => $request->meta_title,
            'meta_desc'       => $request->meta_desc,
        ]);

        return redirect()->route('admin.seo')
            ->with('success', 'Seo added successfully!');
    }


    public function destroy($id)
    {
        $seo = Seo::findOrFail($id);
        $seo->delete();

        return redirect()->back()->with('message', 'Seo deleted successfully');
    }

    public function show($id)
    {
        $seo = Seo::find($id);
        return view('admin.seo.edit', compact('seo'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'page_id' => 'required',
            'meta_title'  => 'required|string',
            'meta_desc'  => 'required',

        ]);
        $seo = Seo::findOrFail($id);
        $seo->page_id = $request->page_id;
        $seo->meta_title = $request->meta_title;
        $seo->meta_desc = $request->meta_desc;
        $seo->save();

        return redirect()->route('admin.seo')
            ->with('success', 'Seo updated successfully!');
    }
}

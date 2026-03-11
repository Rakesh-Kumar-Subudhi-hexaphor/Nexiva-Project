<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }
    public function create()
    {
        return view('admin.slider.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|file|mimes:jpg,jpeg,png,gif,svg|max:2048'
        ]);
        $iconPath = null;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('slider_img'), $filename);
            $iconPath = 'slider_img/' . $filename;
        }

        Slider::create([
            'title' => $request->title,
            'image' => $iconPath,
            'short_desc' => $request->short_desc,
        ]);

        return redirect()->route('admin.slider')->with('success', 'Slider created successfully!');
    }
    public function delete($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        return redirect()->back()->with('success', 'Slider Deleted successfully!');
    }
}

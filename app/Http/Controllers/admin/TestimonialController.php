<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {

        $testimonials = Testimonial::paginate(10);
        return view('admin.testimonial.index', compact('testimonials'));
    }
    public function create()
    {
        return view('admin.testimonial.create');
    }
    public function store(Request $request)
    {
        //
        $request->validate(
            [

                'name' => 'required',
                'designation' => 'required',
                'message' => 'nullable',

                'image' => 'required'
            ]
        );
        $fileName = time() . '.' . $request->image->extension();
        $request->image->move('testimonial_img', $fileName);

        Testimonial::create([

            'name' => $request->name,
            'company' => $request->company,
            'designation' => $request->designation,
            'message' => $request->message,
            'image' => 'testimonial_img/' . $fileName
        ]);
        return redirect(route('admin.testimonial'))->with('message', "Testimonial Added Successfully");
    }

    public function destroy($id)
    {
        //
        $testimony = Testimonial::find($id);
        if (File::exists($testimony->image)) {
            File::delete($testimony->image);
        }
        $testimony->delete();
        return redirect()->back()->with('message', "Testimonial deleted Successfully");
    }
}

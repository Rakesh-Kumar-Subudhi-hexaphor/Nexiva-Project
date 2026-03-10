<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\CareerInquiry;
use Illuminate\Http\Request;

class CareerInquiryController extends Controller
{
        public function index()
    {
        $careerInquiries = CareerInquiry::all();
        return view('admin.career-inquiry.index', compact('careerInquiries'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'job_id' => 'required',
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'cv' => 'required',
                'message' => 'required',

            ]
        );
        $image = $request->file('cv');
        $imageName = uniqid() . '_' . $image->getClientOriginalName();
        $image->move(public_path('cv_img'), $imageName);
        CareerInquiry::create([
            'job_id' => $request->input('job_id'),
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'cv'       => 'cv_img/' . $imageName,
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),

        ]);
        return redirect()->back()
            ->with('success', 'You Inquiry is  Successfully Registered !! Our Team Will get in Touch with You Very soon');
    }
    public function delete($id)
    {
        $contact = CareerInquiry::find($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Inquiry Deleted successfully!');
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\GeneralCareerInquiry;
use Illuminate\Http\Request;

class GeneralCareerInquiryController extends Controller
{
      public function index()
    {
        $careerInquiries = GeneralCareerInquiry::all();
        return view('admin.career-general-inquiry.index', compact('careerInquiries'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
               
                'name' => 'required',
                'email' => 'required',
                'phone' => 'required',
                'cv' => 'required',
                'message' => 'nullable',
                'link' => 'nullable',
                'desired_role' => 'nullable'

            ]
        );
        $image = $request->file('cv');
        $imageName = uniqid() . '_' . $image->getClientOriginalName();
        $image->move(public_path('general_cv_img'), $imageName);
        GeneralCareerInquiry::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'cv' => 'general_cv_img/' . $imageName,
            'message' => $request->input('message'),
            'link' => $request->input('link'),
            'desired_role' => $request->input('desired_role'),
            'message' => $request->input('message'),

        ]);
        return redirect()->back()
            ->with('success', 'You Inquiry is  Successfully Registered !! Our Team Will get in Touch with You Very soon');
    }
    public function delete($id)
    {
        $contact = GeneralCareerInquiry::find($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Inquiry Deleted successfully!');
    }
}

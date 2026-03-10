<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function contact_store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'message' => 'required|string',
        ]);

        // Create a new ContactMessage instance
        $contactMessage = new Contact();
        $contactMessage->name = $request->name;
        $contactMessage->email = $request->email;
        $contactMessage->phone = $request->phone;
        $contactMessage->subject = $request->subject;
        $contactMessage->message = $request->message;

        // Save the contact message
        $contactMessage->save();

        // Optionally, you can send an email notification here

        // Redirect back with success message
        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->back()->with('success', 'Contact Deleted successfully!');
    }
 
}

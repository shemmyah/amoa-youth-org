<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    /**
     * Show the contact form (optional if you are using a blade page directly)
     */
    public function show()
    {
        return view('pages.contact');
    }

    /**
     * Handle contact form submission
     */
    public function submit(Request $request)
    {
        // Validate form inputs
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Extract the form data
        $data = $request->only('name', 'email', 'message');

        // Send email to the configured Gmail address
        Mail::to(config('mail.from.address'))->send(new ContactMail($data));

        // Redirect back with success message
        return back()->with('success', 'Your message has been sent successfully!');
    }
}

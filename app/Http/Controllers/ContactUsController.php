<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function submitForm(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Store the submitted data (optional)
        // You can save it to the database or send it via email

        // Redirect back to the contact form with a success message
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}

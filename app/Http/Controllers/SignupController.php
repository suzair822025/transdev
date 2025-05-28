<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SignupFormMail;

class SignupController extends Controller
{
    public function showForm()
    {
        return view('landing');
    }

    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'phone'   => 'required|string|max:20',
            'message' => 'nullable|string',
            'document' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('document');

        Mail::to('sales@translationwindows.com')->send(new SignupFormMail($validated, $file));

        return back()->with('success', 'Thank you! Your message has been sent.');
    }
}

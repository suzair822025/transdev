<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LandingSignupFormMail;

class LandingSignupController extends Controller
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
            'service_type'  => 'required|string|max:255',
            'language_from' => ['nullable','string','max:100'],
            'language_to'   => ['nullable','string','max:100'],
            'message' => 'nullable|string',
            'document' => 'nullable|file|mimes:pdf,doc,docx,jpg,jpeg,png|max:2048',
        ]);
        if (in_array($request->service_type, ['Audio/Video Transcription','Audio/Video Translation', 'Document Translation'])) {
            $request->validate([
                'language_from' => 'required|string|max:100',
                'language_to'   => 'required|string|max:100',
            ]);
        }        

        $file = $request->file('document');

        Mail::to('sales@translationwindows.com')->send(new LandingSignupFormMail($validated, $file));

        // Redirect to the thank-you page
        return redirect()->route('thankyou.page')->with([
        'message' => 'Thanks for signing up! Our team will reach out to you soon.',
        'source' => 'landing'
        ]);

    }
}

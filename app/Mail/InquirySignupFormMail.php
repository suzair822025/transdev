<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class InquirySignupFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;
    public $file;

    public function __construct($data, $file = null)
    {
        $this->data = $data;
        $this->file = $file;
    }

    public function build()
    {
        $email = $this->subject('New Inquiry Signup')
                      ->view('emails.inquirysignup')
                      ->with(['data' => $this->data]);

        if ($this->file) {
            $email->attach($this->file->getRealPath(), [
                'as' => $this->file->getClientOriginalName(),
                'mime' => $this->file->getMimeType(),
            ]);
        }

        return $email;
    }
}
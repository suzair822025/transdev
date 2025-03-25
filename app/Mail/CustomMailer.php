<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CustomMailer extends Mailable
{
    use Queueable, SerializesModels;

    public $subject;
    public $view;
    public $data;
    public $attachmentPath;

    public function __construct($subject, $view ,$data, $attachmentPath = null)
    {
        $this->subject = $subject;
        $this->view = $view;
        $this->data = $data;
        $this->attachmentPath = $attachmentPath;
    }

    public function build()
    {
        //'emails.adminnotification'
        $email = $this->subject($this->subject)
                      ->view($this->view)
                      ->with('data', $this->data);

        // Attach file if provided
        if ($this->attachmentPath) {
            $email->attach($this->attachmentPath);
        }

        return $email;
    }
}

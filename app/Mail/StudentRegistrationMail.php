<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class StudentRegistrationMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {
        // 不需要傳遞任何參數
    }

    public function build()
    {
        return $this->view('emails.student_registration')
                    ->subject('Welcome to Our Platform');


    }
}

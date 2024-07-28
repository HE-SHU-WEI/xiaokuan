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
                    ->subject('歡迎成為莊小寬數學的學生')
                    ->attach(public_path('storage\photos\gmail_line.png'), [
                        'as' => 'gmail_line.png',
                        'mime' => 'image/jpeg',
                    ]);
    }
}

<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;

class ClassExpirationReminder extends Mailable
{
    public $classname;

    public function __construct($classname)
    {
        $this->classname = $classname;
    }

    public function build()
    {
        return $this->view('emails.class_expiration_reminder');
    }
}

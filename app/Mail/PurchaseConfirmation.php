<?php
// app/Mail/PurchaseConfirmation.php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PurchaseConfirmation extends Mailable
{
    use Queueable, SerializesModels;



    public function build()
    {
        return $this->markdown('emails.purchase_confirmation')
                    ->subject('繳費單');
    }
}

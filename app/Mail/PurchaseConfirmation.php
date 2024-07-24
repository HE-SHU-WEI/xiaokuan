<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PurchaseConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $classname;
    public $classMoney;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($classname, $classMoney)
    {
        $this->classname = $classname;
        $this->classMoney = $classMoney;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.purchase_confirmation')
                    ->subject('莊小寬數學購課繳費')
                    ->attach(public_path('storage\photos\payment.jpg'), [
                        'as' => 'payment.jpg',
                        'mime' => 'image/jpeg',
                    ]);

    }
}

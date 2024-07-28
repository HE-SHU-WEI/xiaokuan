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
<<<<<<< HEAD
                    ->attach(public_path('storage\photos\bank.png'), [
                        'as' => 'bank.png',
                        'mime' => 'image/jpeg',
                    ])
                    ->attach(public_path('storage\photos\gmail_line.png'), [
                        'as' => 'gmail_line.png',
                        'mime' => 'image/jpeg',
                    ]);
=======
                    ->attach(public_path('storage\photos\payment.jpg'), [
                        'as' => 'payment.jpg',
                        'mime' => 'image/jpeg',
                    ]);

>>>>>>> 0d9ae4934db44b1386542bfdd8de1ff952718947
    }
}

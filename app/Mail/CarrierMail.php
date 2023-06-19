<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CarrierMail extends Mailable
{
    use Queueable, SerializesModels;
     public $mailData;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('A career form has been submitted')->view('email.carrier')
        ->attach(public_path('uploads/resume/'.$this->mailData['resume']), [
             'as' => 'sample.pdf',
             'mime' => 'application/pdf',
        ]);
    }
}

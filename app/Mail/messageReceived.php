<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class messageReceived extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'HOLA SUJETO';
    public $msgClase;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($msgConstructor)
    {
        $this->msgClase = $msgConstructor;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->view('emails.message-received');
    }
}

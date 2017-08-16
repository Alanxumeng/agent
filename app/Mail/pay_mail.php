<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Hash;

class pay_mail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

     protected $message;

    public function __construct($message)
    {
      $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
      //dd($this->message);
      return $this->view('Email.pay_email')
        ->with([
          'user'=>$this->message['user'],
          'content'=>$this->message['content'],
        ]);
    }
}

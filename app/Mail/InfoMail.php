<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;




class InfoMail extends Mailable
{
    public $contact;
    use Queueable, SerializesModels;
    
    /**
     * Create a new message instance.
     */
    public function __construct($contact)
    {
       $this->contact = $contact;
    }

  /*  public function build(){
    return $this->view('mail');
   } */

   public function content():Content{
    return new Content(view:"mail");
   }
}
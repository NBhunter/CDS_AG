<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CreateAccountmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $email,$ten,$GOTO;
    public function __construct($Email,$Ten,$goto)
    {
        $this->email =  $Email;
        $this->ten = $Ten;
        $this->GOTO = $goto;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('THÔNG BÁO TẠO TÀI KHOẢNG MỚI')->markdown('emails.CreateAccount');
    }
}

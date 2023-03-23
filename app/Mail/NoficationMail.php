<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NoficationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $DN,$AD;
    public function __construct($DN,$ad)
    {
        $this->DN = $DN;
        $this->AD = $ad;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('THÔNG BÁO ĐÁNH GIÁ DOANH NGHIỆP')->markdown('emails.Nofication');
    }
}

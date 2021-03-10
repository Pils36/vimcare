<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class sendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($thisMail)
    {
        $this->mail = $thisMail;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if($this->mail->purpose){
            if($this->mail->file != NULL){
                return $this->subject($this->mail->purpose)
                    ->attach(asset("messages/files/".$this->mail->file))
                    ->view('mails.message')
                    ->with('maildata', $this->mail);
            }
            else{
                return $this->subject($this->mail->purpose)
                    ->view('mails.message')
                    ->with('maildata', $this->mail);
            }
        
        }
    }
}

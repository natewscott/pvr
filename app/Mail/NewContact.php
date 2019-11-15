<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewContact extends Mailable
{
    use Queueable, SerializesModels;

    public $NewContact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(NewContact $NewContact)
    {
        $this->NewContact = $NewContact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->NewContact->name)
                    ->markdow('emails.contact')
                    ->subject($this->NewContact->subject);
    }
}

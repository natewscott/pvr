<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class TwoDayHuntBooked extends Mailable
{
    use Queueable, SerializesModels;

    public $request;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.two_day_hunt')
                    ->subject('Some one is interested in booking the PVR Two Day Hunt.');
    }
}

<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewHuntingBooking extends Mailable
{
    use Queueable, SerializesModels;

    public $HuntingInquiry;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(HuntingInquiry $HuntingInquiry)
    {
        $this->HuntingInquiry = $HuntingInquiry;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->HuntingInquiry->email, $this->HuntingInquiry->firstname)
                    ->view('view.name')
                    ->subject('A new Hunting Package has been booked.');
    }
}

<?php

namespace App\Listeners;

use App\Events\BookingCreated;
use App\Mail\BookingEmailToClient;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class BookingEmailSendToClient
{
    /**
     * Create the event listener.
     */
    public $booking;

    public function __construct(BookingCreated $event)
    {
        $this->booking = $event->booking;
    }

    /**
     * Handle the event.
     */
    public function handle(BookingCreated $event): void
    {
        Mail::to('tom@surveyall.co.uk')->send(new BookingEmailToClient($event->booking));
        
    }
}

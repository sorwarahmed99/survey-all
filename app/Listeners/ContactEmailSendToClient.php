<?php

namespace App\Listeners;

use App\Events\ContactCreated;
use App\Mail\ContactEmailToClient;
use App\Models\Contact;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class ContactEmailSendToClient
{
    /**
     * Create the event listener.
     */
    public $contact;

    public function __construct(ContactCreated $event)
    {
        $this->contact = $event->contact;
    }

    public function handle(ContactCreated $event)
    {
        // Send email to the client
        Mail::to('tom@surveyall.co.uk')->send(new ContactEmailToClient($event->contact));
    }
}

<?php

namespace App\Listeners;

use App\Mail\NewOfferCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendNewOfferNotificationToBranchPrincipal
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $offer = $event->offer;
        Mail::send(new NewOfferCreated($offer));
    }
}

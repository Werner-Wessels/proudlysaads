<?php

namespace App\Providers;

use App\Providers\OfferCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewOfferNotificationToBranchPrincipal
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Providers\OfferCreated  $event
     * @return void
     */
    public function handle(OfferCreated $event)
    {
        //
    }
}

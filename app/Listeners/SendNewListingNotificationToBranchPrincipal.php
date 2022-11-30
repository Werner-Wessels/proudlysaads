<?php

namespace App\Listeners;

use App\Mail\NewListingCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use JetBrains\PhpStorm\NoReturn;

class SendNewListingNotificationToBranchPrincipal
{
    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    #[NoReturn] public function handle(object $event)
    {
        dd($event);
        $listing = $event->listing;
        Mail::send(new NewListingCreated($listing));
    }
}

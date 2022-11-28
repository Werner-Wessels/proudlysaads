<?php

namespace App\Listeners;

use App\Events\ApplicationCreated;
use App\Mail\ApplicationSuccessfullyMade;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendApplicationDetailsToAdmin
{
    /**
     * Handle the event.
     *
     * @param  \App\Events\ApplicationCreated  $event
     * @return void
     */
    public function handle(ApplicationCreated $event)
    {
        $application = $event->application;
        Mail::send(new ApplicationSuccessfullyMade($application));
    }
}

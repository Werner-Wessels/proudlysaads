<?php

namespace App\Providers;

use App\Events\ApplicationCreated;
use App\Listeners\SendApplicationDetailsToAdmin;
use App\Listeners\SendApplicationWelcomeMailToUser;
use App\Listeners\SendNewListingNotificationToBranchPrincipal;
use App\Listeners\SendNewOfferNotificationToBranchPrincipal;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected array $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        ApplicationCreated::class => [
            SendApplicationDetailsToAdmin::class,
            SendApplicationWelcomeMailToUser::class,
        ],
        ListingCreated::class => array(
            SendNewListingNotificationToBranchPrincipal::class,
        ),
        OfferCreated::class => [
            SendNewOfferNotificationToBranchPrincipal::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}

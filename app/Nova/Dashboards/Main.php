<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\AverageListings;
use App\Nova\Metrics\AverageOffers;
use App\Nova\Metrics\ListingsPerDay;
use App\Nova\Metrics\NewListings;
use App\Nova\Metrics\NewOffers;
use App\Nova\Metrics\NewUsers;
use App\Nova\Metrics\OffersPerDay;
use App\Nova\Metrics\UsersPerDay;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new NewUsers(),
            new NewListings(),
            new NewOffers(),
            new UsersPerDay(),
            new ListingsPerDay(),
            new OffersPerDay(),
            new AverageListings(),
            new AverageOffers()
        ];
    }
}

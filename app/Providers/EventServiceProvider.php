<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use App\Events\OrderPaid;
use App\Listeners\UpdateProductSoldCount;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Listeners\SendOrderPaidMail;
use App\Events\OrderReviewed;
use App\Listeners\UpdateProductRating;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
        OrderPaid::class => [
            UpdateProductSoldCount::class,
            SendOrderPaidMail::class,
        ],
        OrderReviewed::class => [
            UpdateProductRating::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}

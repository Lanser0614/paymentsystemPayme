<?php

namespace App\Providers;

use App\Repository\BillingContract\ConfirmBillingInterface;
use App\Repository\BillingContract\CreateBillingInterface;
use App\Repository\PaymeRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ConfirmBillingInterface::class, PaymeRepository::class);
        $this->app->bind(CreateBillingInterface::class, PaymeRepository::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

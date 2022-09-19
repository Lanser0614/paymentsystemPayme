<?php

namespace App\Providers;

use App\Repository\BillingContract\ConfirmBillingInterface;
use App\Repository\BillingContract\CreateBillingInterface;
use App\Repository\BillingRepository\PaymeBillingService;
use App\Repository\Repo\Contract\PaymeWriteRepositoryInterface;
use App\Repository\Repo\Realization\PaymeWriteRepository;
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
        $this->app->bind(ConfirmBillingInterface::class, PaymeBillingService::class);
        $this->app->bind(CreateBillingInterface::class, PaymeBillingService::class);
        $this->app->bind(PaymeWriteRepositoryInterface::class, PaymeWriteRepository::class);
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

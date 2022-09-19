<?php

namespace App\Providers;

use App\BillingRepository\PaymeUseCase;
use App\Repository\Repo\PaymeRepository\Contract\PaymeReadRepositoryInterface;
use App\Repository\Repo\PaymeRepository\Contract\PaymeWriteRepositoryInterface;
use App\Repository\Repo\PaymeRepository\Realization\PaymeReadRepository;
use App\Repository\Repo\PaymeRepository\Realization\PaymeWriteRepository;
use App\Repository\Repo\TransactionRepository\Contract\TransactionWriteRepositoryInterface;
use App\Repository\Repo\TransactionRepository\Realization\TransactionRepository;
use App\Service\BillingContract\ConfirmBillingInterface;
use App\Service\BillingContract\CreateBillingInterface;
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
        $this->app->bind(ConfirmBillingInterface::class, PaymeUseCase::class);
        $this->app->bind(CreateBillingInterface::class, PaymeUseCase::class);
        $this->app->bind(PaymeWriteRepositoryInterface::class, PaymeWriteRepository::class);
        $this->app->bind(PaymeReadRepositoryInterface::class, PaymeReadRepository::class);
        $this->app->bind(TransactionWriteRepositoryInterface::class, TransactionRepository::class);

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

<?php

declare(strict_types=1);


namespace App\Repository;

use App\Models\PaymeTransaction;
use App\Repository\BillingContract\ConfirmBillingInterface;
use App\Repository\BillingContract\CreateBillingInterface;
use App\Service\PaymeBillingService;

class PaymeRepository implements CreateBillingInterface, ConfirmBillingInterface
{
    protected $paymeBillingService;
    protected $model;

    public function __construct(PaymeBillingService $paymeBillingService, PaymeTransaction $model)
    {
        $this->model = $model;
        $this->paymeBillingService = $paymeBillingService;
    }

    public function confirm(array $DTO)
    {
        $transaction = $this->model->query()
            ->where('transaction_id', $DTO['transaction_id'])
            ->first();
        $data = $this->paymeBillingService->test2($DTO);
        return $transaction->update($data);
    }

    public function create(array $dto)
    {
        $data = $this->paymeBillingService->test($dto);
        return $this->model->create($data);
    }
}

<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\BillingContract\ConfirmBillingInterface;
use App\Repository\BillingContract\CreateBillingInterface;

class PaymentService
{
    public function create(CreateBillingInterface $createBilling, $dto)
    {
        $data = $createBilling->create($dto);
        return $data;
    }

    public function perform(ConfirmBillingInterface $confirmBilling, $dto)
    {
        $data = $confirmBilling->confirm($dto);
        return $data;
    }
}

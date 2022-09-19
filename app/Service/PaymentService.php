<?php

declare(strict_types=1);

namespace App\Service;

use App\Repository\BillingContract\ConfirmBillingInterface;
use App\Repository\BillingContract\CreateBillingInterface;

class PaymentService
{
    public function create(CreateBillingInterface $createBilling, $dto)
    {
        return $createBilling->create($dto);
    }

    public function perform(ConfirmBillingInterface $confirmBilling, $dto)
    {
        return $confirmBilling->confirm($dto);
    }
}

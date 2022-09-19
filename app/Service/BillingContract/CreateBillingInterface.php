<?php

declare(strict_types=1);


namespace App\Service\BillingContract;

interface CreateBillingInterface
{
    public function create(array $dto);
}

<?php

declare(strict_types=1);


namespace App\Repository\BillingContract;

interface CreateBillingInterface
{
    public function create(array $dto);
}

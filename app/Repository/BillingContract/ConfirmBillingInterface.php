<?php

declare(strict_types=1);


namespace App\Repository\BillingContract;

interface ConfirmBillingInterface
{
    public function confirm(array $DTO);
}

<?php

declare(strict_types=1);


namespace App\Service\BillingContract;

interface ConfirmBillingInterface
{
    public function confirm(array $DTO);
}

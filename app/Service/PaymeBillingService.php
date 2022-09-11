<?php

declare(strict_types=1);


namespace App\Service;

class PaymeBillingService
{
    public function test($dto)
    {
        $data = [
            "transaction_id" => $dto['transaction_id'],
            "amount" => $dto['amount'],
            "account" => $dto['account'],
            'status' => 1,
        ];
        return $data;
    }

    public function test2($dto)
    {
        $data = [
            "transaction_id" => $dto['transaction_id'],
            "amount" => $dto['amount'],
            "account" => $dto['account'],
            'status' => 2,
        ];
        return $data;

    }
}

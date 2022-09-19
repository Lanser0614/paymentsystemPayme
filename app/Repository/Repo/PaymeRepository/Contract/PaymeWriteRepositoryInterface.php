<?php

declare(strict_types=1);


namespace App\Repository\Repo\PaymeRepository\Contract;

use App\Models\PaymeTransaction;
use App\Models\Transaction;

interface PaymeWriteRepositoryInterface
{
    public function save(PaymeTransaction $model);

    public function update($DTO);

    public function associate(Transaction $transaction);

}

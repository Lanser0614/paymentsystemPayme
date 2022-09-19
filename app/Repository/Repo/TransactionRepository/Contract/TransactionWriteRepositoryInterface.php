<?php

declare(strict_types=1);


namespace App\Repository\Repo\TransactionRepository\Contract;

use App\Models\Transaction;

interface TransactionWriteRepositoryInterface
{
    public function save(Transaction $model);
}

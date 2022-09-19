<?php

declare(strict_types=1);


namespace App\Repository\Repo\TransactionRepository\Realization;

use App\Models\Transaction;
use App\Repository\Repo\TransactionRepository\Contract\TransactionWriteRepositoryInterface;

class TransactionRepository implements TransactionWriteRepositoryInterface
{
    /**
     * @var Transaction
     */
    protected $model;

    public function __construct(Transaction $model)
    {
        $this->model = $model;
    }

    public function save(Transaction $data)
    {
        $data->save();
        return $data;
    }
}

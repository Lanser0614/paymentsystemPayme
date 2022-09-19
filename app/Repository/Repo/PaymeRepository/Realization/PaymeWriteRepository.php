<?php

declare(strict_types=1);


namespace App\Repository\Repo\PaymeRepository\Realization;

use App\Models\PaymeTransaction;
use App\Models\Transaction;
use App\Repository\Repo\PaymeRepository\Contract\PaymeWriteRepositoryInterface;

class PaymeWriteRepository implements PaymeWriteRepositoryInterface
{
    /**
     * @var PaymeTransaction
     */
    protected $model;

    public function __construct(PaymeTransaction $model)
    {
        $this->model = $model->setConnection('mysql');
    }

    public function save(PaymeTransaction $model)
    {
         $model->save();
        return $model;
    }

    public function update($DTO)
    {
        return $DTO;
    }

    public function associate(Transaction $transaction)
    {
        $this->model->transaction()->associate($transaction);
    }
}

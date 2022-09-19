<?php

declare(strict_types=1);


namespace App\Repository\Repo\PaymeRepository\Realization;

use App\Models\PaymeTransaction;
use App\Repository\Repo\PaymeRepository\Contract\PaymeReadRepositoryInterface;
use App\Repository\Repo\PaymeRepository\Contract\PaymeWriteRepositoryInterface;

class PaymeReadRepository implements PaymeReadRepositoryInterface
{
    /**
     * @var PaymeTransaction
     */
    protected $model;

    public function __construct(PaymeTransaction $model)
    {
        $this->model = $model->setConnection('mysql');
    }


    public function whereFirst(string $param, $value)
    {
     return   $this->model->query()->where($param,'=', $value)->first();
    }

    public function where(string $param, $value)
    {
       return $this->model::query()->where($param, $value)->get();
    }
}

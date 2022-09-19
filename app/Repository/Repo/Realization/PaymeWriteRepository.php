<?php

declare(strict_types=1);


namespace App\Repository\Repo\Realization;

use App\Models\PaymeTransaction;
use App\Repository\Repo\Contract\PaymeWriteRepositoryInterface;

class PaymeWriteRepository implements PaymeWriteRepositoryInterface
{
    /**
     * @var PaymeTransaction
     */
    protected $model;

    public function __construct(PaymeTransaction $model)
    {
        $this->model = $model->setConnection('mysql2');
    }

    public function save($DTO)
    {
        return $DTO;
    }

    public function update($DTO)
    {
        return $DTO;
    }
}

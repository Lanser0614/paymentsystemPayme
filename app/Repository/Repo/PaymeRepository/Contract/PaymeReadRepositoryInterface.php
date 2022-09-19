<?php

declare(strict_types=1);


namespace App\Repository\Repo\PaymeRepository\Contract;

interface PaymeReadRepositoryInterface
{

    public function whereFirst(string $param, $value);

    public function where(string $param, $value);

}

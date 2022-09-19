<?php

declare(strict_types=1);


namespace App\Repository\Repo\Contract;

interface PaymeWriteRepositoryInterface
{
    public function save($DTO);

    public function update($DTO);

}

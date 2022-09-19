<?php

declare(strict_types=1);


namespace App\Repository\BillingRepository;

use App\Repository\BillingContract\ConfirmBillingInterface;
use App\Repository\BillingContract\CreateBillingInterface;
use App\Repository\Repo\Contract\PaymeWriteRepositoryInterface;

class PaymeBillingService implements CreateBillingInterface, ConfirmBillingInterface
{
    /**
     * @var PaymeWriteRepositoryInterface
     */
    private $writeRepo;

    public function __construct(PaymeWriteRepositoryInterface $writeRepo)
    {
        $this->writeRepo = $writeRepo;
    }


    public function confirm(array $DTO)
    {
        return $this->writeRepo->update($DTO);
    }

    public function create(array $dto)
    {
        return $this->writeRepo->save($dto);
    }
}

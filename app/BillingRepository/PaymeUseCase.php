<?php

declare(strict_types=1);


namespace App\BillingRepository;

use App\Models\PaymeTransaction;
use App\Models\Transaction;
use App\Repository\Repo\PaymeRepository\Contract\PaymeReadRepositoryInterface;
use App\Repository\Repo\PaymeRepository\Contract\PaymeWriteRepositoryInterface;
use App\Repository\Repo\TransactionRepository\Contract\TransactionWriteRepositoryInterface;
use App\Service\BillingContract\ConfirmBillingInterface;
use App\Service\BillingContract\CreateBillingInterface;
use Illuminate\Support\Carbon;

class PaymeUseCase implements CreateBillingInterface, ConfirmBillingInterface
{
    /**
     * @var PaymeWriteRepositoryInterface
     */
    private $writeRepo;
    /**
     * @var PaymeReadRepositoryInterface
     */
    private $readRepo;

    private $transactionWriteRepo;

    public function __construct(PaymeWriteRepositoryInterface $writeRepo, PaymeReadRepositoryInterface $readRepo, TransactionWriteRepositoryInterface $transactionWriteRepo)
    {
        $this->transactionWriteRepo = $transactionWriteRepo;
        $this->writeRepo = $writeRepo;
        $this->readRepo = $readRepo;
    }


    public function confirm(array $DTO)
    {
        return $this->writeRepo->update($DTO);
    }

    public function create(array $dto)
    {
        $params = $dto['params'];
        $paymeTransaction = $this->readRepo->whereFirst('payme_transaction_id', $dto['id']);
        if (!$paymeTransaction) {
            $transaction = new Transaction();
            $transaction->payment_method_id = 5;
            $transaction->credit_id = 314482;
            $transaction->amount = $params['amount'];
            $transaction->requested_amount = $params['amount'];
            $transaction->label = Transaction::LABEL_APPLICATION;
            $transaction->is_multi_withdraw = false;
            $transaction->card_id = null;
            $transaction->card_number = null;
            $transaction = $this->transactionWriteRepo->save($transaction);
        } else {
            return 'errror';
        }

        $newTRansaction = new PaymeTransaction([
            "payme_transaction_id" => $dto['id'],
            "status" => 2,
            "payme_time" => Carbon::now()
        ]);
        $newTRansaction->transaction()->associate($transaction);
        return $this->writeRepo->save($newTRansaction);
    }
}

<?php

namespace App\Http\Controllers;

use App\BillingRepository\PaymeUseCase;
use App\Http\Requests\PaymeRequest;
use App\Repository\PaymeRepository;
use App\Service\PaymentService;

class BillingController extends Controller
{
    public $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function payme(PaymeRequest $request, PaymeUseCase $paymeRepository)
    {
        $dto = $request->validated();
        if ($dto['method'] == 'CreateTransaction') {
           $data =  $this->paymentService->create($paymeRepository, $dto);
        }
        if ($dto['method'] == 'confirm') {
            $data = $this->paymentService->perform($paymeRepository, $dto);
        }
        return response()->json([$data], 200);
    }
}

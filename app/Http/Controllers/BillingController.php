<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymeRequest;
use App\Repository\BillingContract\ConfirmBillingInterface;
use App\Repository\BillingContract\CreateBillingInterface;
use App\Repository\BillingRepository\PaymeBillingService;
use App\Repository\PaymeRepository;
use App\Service\PaymentService;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    public function payme(PaymeRequest $request, PaymeBillingService $paymeRepository)
    {
        $dto = $request->validated();
        if ($dto['method'] == 'create') {
            $data = $this->paymentService->create($paymeRepository, $dto);
        }
        if ($dto['method'] == 'confirm') {
            $data = $this->paymentService->perform($paymeRepository, $dto);
        }
        return response()->json([$data], 200);
    }
}

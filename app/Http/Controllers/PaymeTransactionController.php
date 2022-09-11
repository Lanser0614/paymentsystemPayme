<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePaymeTransactionRequest;
use App\Http\Requests\UpdatePaymeTransactionRequest;
use App\Models\PaymeTransaction;

class PaymeTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePaymeTransactionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymeTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaymeTransaction  $paymeTransaction
     * @return \Illuminate\Http\Response
     */
    public function show(PaymeTransaction $paymeTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaymeTransaction  $paymeTransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(PaymeTransaction $paymeTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaymeTransactionRequest  $request
     * @param  \App\Models\PaymeTransaction  $paymeTransaction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymeTransactionRequest $request, PaymeTransaction $paymeTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaymeTransaction  $paymeTransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaymeTransaction $paymeTransaction)
    {
        //
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed $requested_amount
 * @property mixed|null $card_number
 * @property mixed|null $card_id
 * @property false|mixed $is_multi_withdraw
 * @property mixed|string $label
 * @property mixed $amount
 * @property int|mixed $credit_id
 * @property int|mixed $payment_method_id
 */
class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';
//    protected $guarded = [];

    const LABEL_APPLICATION = 'application'; //транзакции созданные через приложения по биллигу

}

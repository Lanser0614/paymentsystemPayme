<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PaymeTransaction extends Model
{
    use HasFactory;

//    protected $fillable = [
//        'transaction_id',
//        'amount',
//        'account',
//        'status'
//    ];

    protected $table = 'payme_transactions';
    protected $guarded = [];
    public function transaction(): BelongsTo
    {
        return $this->belongsTo(Transaction::class);
    }

}

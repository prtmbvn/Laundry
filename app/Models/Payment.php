<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id','payment_method','payment_date','amount_paid','payment_reference'
    ];

    public function transaction()

    {
        return $this->belongsTo(Transaction::class);
    }
}

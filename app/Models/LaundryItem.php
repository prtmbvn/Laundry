<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaundryItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_id',
        'item_type',
        'quantity',
        'price_per_item',
        'subtotal',
    ];

    public function transaction()

    {
        return $this->belongsTo(Transaction::class);
    }

}


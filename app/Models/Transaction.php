<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'transaction_date',
        'total_amount',
        'status',
        'payment_status',
    ];

    public function customer()

    {
        return $this->belongsTo(Customer::class);
    }

    public function laundryItems()

    {
        return $this->hasMany(LaundryItem::class);
    }

    public function payments()

    {
        return $this->hasMany(Payment::class);
    }

    public function invoice()

    {
        return $this->hasOne(Invoice::class);
    }


}

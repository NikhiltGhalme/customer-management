<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /** @use HasFactory<\Database\Factories\OrderFactory> */
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'order_number',
        'amount',
        'status',
        'order_date',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}

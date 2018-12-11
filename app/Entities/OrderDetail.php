<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'quantity',
        'order_id',
        'product_code'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}

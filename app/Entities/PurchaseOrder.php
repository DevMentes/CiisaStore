<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'total_price',
        'provider_id',
        'product_code',
        'quantity'
    ];
}

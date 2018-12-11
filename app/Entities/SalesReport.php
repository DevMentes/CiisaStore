<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class SalesReport extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'product_code',
        'quantity',
        'amount',
        'family_id'
    ];
}

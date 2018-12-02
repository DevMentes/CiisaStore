<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{

    public $timestamps = false;

    protected $fillable = [
        'date',
        'total_price',
        'customer_id'
    ];
}

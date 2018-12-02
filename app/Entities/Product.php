<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = "code";

    public $incrementing = false;

    public $timestamps = false;

    protected $fillable = [
        'code',
        'name',
        'description',
        'price',
        'stock',
        'stock_treshold',
        'family_id'
    ];
}

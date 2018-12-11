<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = 'addresses';

    public $timestamps = false;

    protected $fillable = [
        'street_name',
        'street_number',
        'observation',
        'city',
        'customer_id'
    ];
}

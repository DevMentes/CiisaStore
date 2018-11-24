<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    public $timestamps = false;

    protected $fillable = [
      'name'
    ];
}

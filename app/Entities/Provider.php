<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public $timestamps = false;

    protected $fillable = ['name'];

    public function products()
    {
        $this->hasMany(Product::class);
    }
}

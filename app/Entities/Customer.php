<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'street_name',
        'street_number',
        'city'
    ];

    public function register($name, $lastname, $email, $phone, $streetName, $streetNumber, $city)
    {
        $this->name = $name;
        $this->lastName = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->street_name = $streetName;
        $this->street_number = $streetNumber;
        $this->city = $city;

        $this->save();
    }
}

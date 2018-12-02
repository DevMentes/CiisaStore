<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterCustomerController extends Controller
{
    public function register(Request $request)
    {
        $name = $request->input('name');
        $lastname = $request->input('lastname');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $numberaddress = $request->input('numberaddress');
        $city = $request->input('city');
        $observation = $request->input('observation');
    }
}

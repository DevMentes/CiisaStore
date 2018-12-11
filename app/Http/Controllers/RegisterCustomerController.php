<?php

namespace App\Http\Controllers;

use App\Entities\Customer;
use Illuminate\Http\Request;

class RegisterCustomerController extends Controller
{
    public function register(Request $request)
    {
        $customer = new Customer;

        $customer->register(
            $request->input('name'),
            $request->input('lastname'),
            $request->input('email'),
            $request->input('phone'),
            $request->input('street_name'),
            $request->input('street_number'),
            $request->input('city')
        );

        $request->session()->put('customer', $customer);

        return redirect('/confirmar');
    }
}

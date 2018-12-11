<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyController extends Controller
{

    public function verify(Request $request)
    {
        return view('store.verify');
    }
}

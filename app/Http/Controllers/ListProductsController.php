<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListProductsController extends Controller
{
    public function list()
    {
        return view('store.products');
    }
}

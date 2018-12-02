<?php

namespace App\Http\Controllers;

use App\Entities\Product;
use Illuminate\Http\Request;

class ProductDetailsController extends Controller
{
    public function view($product_code)
    {
        return view('store.product_detail',['product' => Product::where('code', $product_code)->first()]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Entities\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request, $product_code, $quantity)
    {
        $product = Product::where('code', $product_code)->first();

        $cart = $request->session()->get('cart');


        $cart->add($product->code, (int)$quantity);


        $request->session()->remove('cart');

        $request->session()->put('cart', $cart);
        $request->session()->flash('message', 'Se ha añadido al carro.');

        return back();
    }

    public function view()
    {
        return view('store.cart');
    }
}

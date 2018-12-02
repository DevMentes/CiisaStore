<?php

namespace App\Http\Controllers;

use App\Entities\Family;
use App\Entities\Product;

class ListProductsController extends Controller
{
    public function all()
    {
        return view('store.products');
    }

    public function byFamily($family)
    {

        $family = Family::where('name', str_replace('-',' ', $family))->first();

        return view('store.products', (
            [
                'products' => Product::where('family_id', $family->id)->get()
            ]
        )
        );
    }
}

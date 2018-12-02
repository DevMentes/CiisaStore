<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        return view('store.index', [
            'products' => DB::table('products')
                        ->inRandomOrder()
                        ->limit(3)
                        ->get()
        ]);
    }
}

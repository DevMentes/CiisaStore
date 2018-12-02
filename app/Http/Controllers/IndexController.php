<?php

namespace App\Http\Controllers;

use App\Entities\Family;

class IndexController extends Controller
{
    public function index()
    {
        return view('store.index', compact(Family::all(),'families'));
    }
}

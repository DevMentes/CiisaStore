<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class MantainersController extends Controller
{
    public function view()
    {
        return view('admin.mantainers.mantainer');
    }
}

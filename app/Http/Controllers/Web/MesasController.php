<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class MesasController extends Controller
{
    public function index()
    {
        return view('mesas');
    }
}

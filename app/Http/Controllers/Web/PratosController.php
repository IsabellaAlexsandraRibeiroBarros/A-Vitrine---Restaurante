<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class PratosController extends Controller
{
    public function index()
    {
        return view('pratos');
    }
}

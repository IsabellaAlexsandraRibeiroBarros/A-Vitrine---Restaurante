<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class EstoqueController extends Controller
{
    public function index()
    {
        return view('estoque');
    }
}

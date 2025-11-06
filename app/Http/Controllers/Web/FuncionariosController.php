<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class FuncionariosController extends Controller
{
    public function index()
    {
        return view('funcionarios');
    }
}

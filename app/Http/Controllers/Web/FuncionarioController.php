<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class FuncionarioController extends Controller
{
    public function areafuncionario()
    {
        return view('area-funcionario');
    }
}

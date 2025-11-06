<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class CardapioController extends Controller
{
    public function cardapio()
    {
        return view('cardapio');
    }
}

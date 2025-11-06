<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

class IngredientesController extends Controller
{
    public function index()
    {
        return view('ingredientes');
    }
}

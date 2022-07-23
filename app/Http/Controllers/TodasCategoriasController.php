<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodasCategoriasController extends Controller
{
    public function todas_categorias(){
        return view('site.todas_categorias');
    }
}

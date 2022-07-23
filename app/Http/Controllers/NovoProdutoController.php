<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovoProdutoController extends Controller
{
    public function novo_produto(){
        return view('site.novo_produto');
    }
}

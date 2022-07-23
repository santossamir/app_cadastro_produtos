<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NovaCategoriaController extends Controller
{
    public function nova_categoria(){
        return view('site.nova_categoria');
    }
}

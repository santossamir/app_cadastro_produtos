<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class NovaCategoriaController extends Controller
{
    public function nova_categoria(){
        return view('site.nova_categoria');
    }

    public function store(Request $request){
        $data_form = $request->all();
       
        $novaCategoria = new Categorias;
        $novaCategoria->nome_categoria = $data_form['nome_categoria'];
        $novaCategoria->save();

        return redirect('/todas_categorias');
    }
}

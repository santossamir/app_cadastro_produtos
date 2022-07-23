<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Categorias;

class TodasCategoriasController extends Controller
{
    public function todas_categorias(){
        $categorias = DB::select('SELECT * FROM categorias;');
        return view('site.todas_categorias', ['categorias' => $categorias]);
    }

    public function update($id)
    {
        $categoria = Categorias::find($id);
        return view('site._update.update_categoria', ['categoria'=> $categoria]);
    }

    public function delete($id)
    {
        $categoria = Categorias::find($id);
        return view('site._delete.delete_categoria', ['categoria'=> $categoria]);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produtos;

class PrincipalController extends Controller
{
    public function index(){
        $produtos = DB::table('produtos')
        ->leftjoin('categorias','categoria_id', '=', 'categorias.id', '=', 'categorias.nome_categoria')
        ->select('produtos.id', 'produtos.nome_produto', 'produtos.preco_produto', 'categorias.nome_categoria')
        ->get();
        return view('site.index', ['produtos' => $produtos]);
    }

    public function edit($id)
    {
        $produto = Produtos::find($id);
        return view('site.novo_produto', ['produto'=> $produto]);
    }

    public function destroy($id)
    {
        $produto = Produtos::find($id);
        $produto->forceDelete();

        return view('site.index');
    }

}

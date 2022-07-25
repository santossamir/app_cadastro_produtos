<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NovoProdutoController extends Controller
{
    public function novo_produto(){
        $categorias = Categorias::all();
        return view('site.novo_produto', compact('categorias', $categorias));
    }

    public function store(Request $request){
        
        $regra = [
            'nome_produto' => 'required|min:3',
            'preco_produto' => 'required|numeric|min:3',
            'categoria_id' => 'required|numeric'
        ];
        
        $feedback = [
            'required' => 'Este campo é obrigatório!',
            'nome_produto.min' => 'O campo precisa ter no mínimo 3 caracteres',
            'numeric' => 'Preencha o campo apenas com números.'
        ];

        $request->validate($regra, $feedback);

        $data_form = $request->all();
 
        $novo_produto = new Produtos;
        $novo_produto->nome_produto = $data_form['nome_produto'];
        $novo_produto->preco_produto = $data_form['preco_produto'];
        $novo_produto->categoria_id = $data_form['categoria_id'];
        $novo_produto->save();

        return redirect('/');
    }

    public function update(Request $request, $id){

        $produto = Produtos::find($id);
        $produto->nome_produto = $request->input('nome_produto', $produto->nome_produto);
        $produto->preco_produto = $request->input('preco_produto', $produto->preco_produto);
        $produto->categoria_id = $request->input('categoria_id', $produto->categoria_id);
        $produto->save();

        return redirect('/');

    }

}

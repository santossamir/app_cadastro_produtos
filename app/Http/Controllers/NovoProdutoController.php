<?php

namespace App\Http\Controllers;
use App\Models\Produtos;
use Illuminate\Http\Request;

class NovoProdutoController extends Controller
{
    public function novo_produto(){
        return view('site.novo_produto');
    }

    public function store(Request $request){
        $data_form = $request->all();
       
        $novoProduto = new Produtos;
        $novoProduto->nome_produto = $data_form['nome_produto'];
        $novoProduto->preco_produto = $data_form['preco_produto'];
        $novoProduto->categoria_id = $data_form['categoria_id'];
        $novoProduto->save();

        return redirect('/');
    }
}

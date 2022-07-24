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

    public function update(Request $request, $id){

        $produto = Produtos::find($id);
        $produto->nome_produto = $request->input('nome_produto', $produto->nome_produto);
        $produto->preco_produto = $request->input('preco_produto', $produto->preco_produto);
        $produto->categoria_id = $request->input('categoria_id', $produto->categoria_id);
        $produto->save();

        return redirect('/');

    }

}

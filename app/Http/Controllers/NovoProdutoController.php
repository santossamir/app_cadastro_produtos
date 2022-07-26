<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use App\Models\Produtos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NovoProdutoController extends Controller
{
    public function novo_produto(Request $request){

        //Erro no campo categoria_id se a categoria não estiver cadastrada.
        $erro = '';
         if($request->get('erro') == 1){
            $erro = 'Categoria ainda não cadastrada.';
         };

        return view('site.novo_produto', ['erro' => $erro]);
    }

    public function store(Request $request){
        
        //Regras de validação no form de cadastro.
        $regra = [
            'nome_produto' => 'required|min:3',
            'preco_produto' => 'required|min:3',
            'categoria_id' => 'required|numeric'
        ];
        
        $feedback = [
            'required' => 'Este campo é obrigatório!',
            'nome_produto.min' => 'O campo precisa ter no mínimo 3 caracteres',
            'numeric' => 'Preencha o campo apenas com números.'
        ];

        $request->validate($regra, $feedback);

        //Passando pelo validate, agora avalia se a categoria está cadastrada
        $id_categoria = $request->get('categoria_id');

        $categoria = new Categorias();

        $existe_categoria = $categoria->where('id', $id_categoria)->get()->first();

        if(isset($existe_categoria->nome_categoria)){
            echo "Categoria existe";
        }else{
            return redirect()->route('site.novo_produto', ['erro' => 1]);
        }

        //Salvando dados no banco
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

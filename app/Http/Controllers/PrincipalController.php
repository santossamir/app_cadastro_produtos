<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Produtos;

class PrincipalController extends Controller
{
    public function index(){
        $produtos = DB::select('SELECT * FROM produtos;');
        return view('site.index', ['produtos' => $produtos]);
    }

    public function edit($id)
    {
        $produto = Produtos::find($id);
        return view('site.novo_produto', ['produto'=> $produto]);
    }

    /*public function update($id)
    {
        $produto = Produtos::find($id);
        return view('site._update.update_produto', ['produto'=> $produto]);
    }*/

    public function delete($id)
    {
        $produto = Produtos::find($id);
        return view('site._delete.delete_produto', ['produto'=> $produto]);
    }

}

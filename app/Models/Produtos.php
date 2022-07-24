<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'id',
        'nome_produto',
        'preco_produto',
        'categoria_id'
       ];
}

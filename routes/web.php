<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\NovoProdutoController;
use App\Http\Controllers\NovaCategoriaController;
use App\Http\Controllers\TodasCategoriasController;

Route::get('/', [PrincipalController::class, 'index']);

Route::get('/novo_produto', [NovoProdutoController::class, 'novo_produto']);

Route::get('/todas_categorias', [TodasCategoriasController::class, 'todas_categorias']);

Route::get('/nova_categoria', [NovaCategoriaController::class, 'nova_categoria']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\NovoProdutoController;
use App\Http\Controllers\NovaCategoriaController;
use App\Http\Controllers\TodasCategoriasController;

Route::get('/', [PrincipalController::class, 'index']);
Route::get('/produto/update/{id}', [PrincipalController::class, 'update']);
Route::get('/produto/delete/{id}', [PrincipalController::class, 'delete']);

Route::get('/novo_produto', [NovoProdutoController::class, 'novo_produto']);
Route::post('/produtos/store', [NovoProdutoController::class, 'store']);

Route::get('/todas_categorias', [TodasCategoriasController::class, 'todas_categorias']);
Route::get('/categoria/update/{id}', [TodasCategoriasController::class, 'update']);
Route::get('/categoria/delete/{id}', [TodasCategoriasController::class, 'delete']);

Route::get('/nova_categoria', [NovaCategoriaController::class, 'nova_categoria']);
Route::post('/categorias/store', [NovaCategoriaController::class, 'store']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\NovoProdutoController;
use App\Http\Controllers\NovaCategoriaController;
use App\Http\Controllers\TodasCategoriasController;

Route::get('/', [PrincipalController::class, 'index']);
Route::get('/produtos/edit/{id}', [PrincipalController::class, 'edit']);
Route::get('/produtos/delete/{id}', [PrincipalController::class, 'destroy']);

Route::get('/novo_produto', [NovoProdutoController::class, 'novo_produto']);
Route::post('/produtos/store', [NovoProdutoController::class, 'store']);
Route::post('/produtos/update/{id}', [NovoProdutoController::class, 'update']);

Route::get('/todas_categorias', [TodasCategoriasController::class, 'todas_categorias']);
Route::get('/categorias/edit/{id}', [TodasCategoriasController::class, 'edit']);
Route::get('/categorias/delete/{id}', [TodasCategoriasController::class, 'destroy']);

Route::get('/nova_categoria', [NovaCategoriaController::class, 'nova_categoria']);
Route::post('/categorias/store', [NovaCategoriaController::class, 'store']);
Route::post('/categorias/update/{id}', [NovaCategoriaController::class, 'update']);
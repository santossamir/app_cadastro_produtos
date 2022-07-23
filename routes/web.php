<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('site.index');
});

Route::get('/novo_produto', function () {
    return view('site.novo_produto');
});

Route::get('/todas_categorias', function () {
    return view('site.todas_categorias');
});

Route::get('/nova_categoria', function () {
    return view('site.nova_categoria');
});
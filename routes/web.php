<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\TemplateController;
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/propaganda', function () {
    return view('propaganda');
});

/*Route::get('/categoria', function () {
    return view('welcome');
});*/
Route::get('/', [TemplateController::class, 'home']);
Route::get('/categoria', [CategoriaController::class, 'categoria']);
Route::get('/produto/{nomeCategoria}', [CategoriaController::class, 'produto'])->name('produtos.categoria');
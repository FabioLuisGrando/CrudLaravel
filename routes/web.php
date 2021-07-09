<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\CategoriaController;

// Home page
Route::get('/', function(){
    return view('home');
});

// Produtos Routes
Route::get('/produtos', [ProdutoController::class, 'index']);
Route::get('/produtos/criar', [ProdutoController::class, 'create']);
Route::post('/produtos/criar', [ProdutoController::class, 'store']);
Route::get('/produtos/{id}/editar', [ProdutoController::class, 'edit']);
Route::put('/produtos/{id}/editar', [ProdutoController::class, 'update']);
Route::get('/produtos/{id}', [ProdutoController::class, 'destroy']);

// Categorias Routes
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/criar', [CategoriaController::class, 'create']);
Route::post('/categorias/criar', [CategoriaController::class, 'store']);
Route::get('/categorias/{id}/editar', [CategoriaController::class, 'edit']);
Route::put('/categorias/{id}/editar', [CategoriaController::class, 'update']);
Route::get('/categorias/{id}', [CategoriaController::class, 'destroy']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\FornecedorController;

Route::get('/', function () {
    return view('welcome');  // ou view('sua.home') se usar outra
})->name('home');

// Rotas para Produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.index');

// Rotas para Fornecedores  
Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('fornecedores.index');

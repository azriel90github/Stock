<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});
  
Route::get('/produtos', [ProdutoController::class , 'listagem' ]);







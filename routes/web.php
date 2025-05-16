<?php

use App\Http\Controllers\MainController;    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// RUTA DE LA PAGINA PRINCIPAL
Route::get('/', [MainController::class, 'index'])->name('index');

// RUTAA DE LA PAGINA DE TEST

Route::get('/test', [TestController::class, 'index'])->name('test');

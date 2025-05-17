<?php

use App\Http\Controllers\MainController;    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// RUTA DE LA PAGINA PRINCIPAL
Route::get('/', [MainController::class, 'index'])->name('index');

// RUTAA DE LA PAGINA DE TEST

Route::get('/test', [TestController::class, 'index'])->name('test');

Route::get('/test/new', [TestController::class, 'new'])->name('test.new');

Route::get('/test/addmassive', [TestController::class, 'AddMassive'])->name('test.addmassive');

Route::get('/test/update', [TestController::class, 'UpdateUser'])->name('test.update');

Route::get('/test/delete', [TestController::class, 'DeleteUser'])->name('test.delete');
<?php

use App\Http\Controllers\MainController;    
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

// RUTA DE LA PAGINA PRINCIPAL
Route::get('/', [MainController::class, 'index'])->name('index');

// RUTAA DE LA PAGINA DE TEST

Route::get('/test', [TestController::class, 'index'])->name('test'); // RUTA CON VISTA

Route::get('/test/new', [TestController::class, 'new'])->name('test.new');

Route::get('/test/addmassive', [TestController::class, 'AddMassive'])->name('test.addmassive');

Route::get('/test/update', [TestController::class, 'UpdateUser'])->name('test.update');

Route::get('/test/delete', [TestController::class, 'DeleteUser'])->name('test.delete');

Route::get('/test/getuser/{id}', [TestController::class, 'getUserById'])->name('test.getuser');

Route::get('/test/posts', [TestController::class, 'getPosts'])->name('test.posts'); // RUTA CON VISTA

// RUTA DE LA PAGINA DE TEST GENERAL
Route::get('/test/gen', [TestController::class, 'general'])->name('test.gen'); // RUTA CON VISTA
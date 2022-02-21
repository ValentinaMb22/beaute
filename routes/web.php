<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/',[IndexController::class,'index']);

 /* Route::get('/', function () {
    return view('dashboard');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

  /* Ruta para salas */
Route::resource('salas',SalaController::class)->names('salas');

/* Ruta para servicios */
Route::resource('servicios',ServicioController::class)->names('servicios');

/* Ruta para categorias */
Route::resource('categorias',CategoriaController::class)->names('categorias');

/* Ruta para usuarios */
/* Route::resource('users',UserController::class)->names('users'); */

/* Rutas paginas estaticas */
Route::view('/nosotros', 'nosotros')->name('nosotros');
Route::view('/contacto', 'contacto')->name('contacto');

Route::get('getSala/{sala}',[CitaController::class,
'getSala'])->name('getSala')->middleware('auth');


/* Route::get('getServicio/{sala}',[CitaController::class,
'getServicio'])->name('getServicio'); */



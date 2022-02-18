 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SalaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ServicioController;
use App\Http\Controllers\Admin\CitaController;

/*  Route::get('', function () {
    return "hola mundo";
}) */

 Route::get('',HomeController::class,'index')->name('admin.home'); 

/* Ruta para salas */
Route::resource('salas',SalaController::class)->names('admin.salas');
/* Ruta para usuarios */
Route::resource('users',UserController::class)->names('admin.users');
/* Ruta para categorias */
Route::resource('categorias',CategoriaController::class)->names('admin.categorias');
/* Ruta para servicios */
Route::resource('servicios',ServicioController::class)->names('admin.servicios');

/* Ruta para citas */
Route::get('getSala/{sala}',[CitaController::class,
'getSala'])->name('getSala')->middleware('auth');

Route::resource('citas',CitaController::class)->names('admin.citas');



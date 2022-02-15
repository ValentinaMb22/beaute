 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SalaController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoriaController;
use App\Http\Controllers\Admin\ServicioController;



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
Route::resource('servicios',ServicioController::class)->names('admin.servicios ');
/* Ruta citas */
Route::resource('citas',CitaController::class);
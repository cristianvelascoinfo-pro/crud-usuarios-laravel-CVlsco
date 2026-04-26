<?php

use Illuminate\Support\Facades\Route;
// Importamos nuestro controlador (el cerebro)
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

// Esta línea crea automáticamente las 7 rutas del CRUD (index, create, store, etc.)
Route::resource('usuarios', UsuarioController::class);
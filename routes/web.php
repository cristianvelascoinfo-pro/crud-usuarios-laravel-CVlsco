<?php

use Illuminate\Support\Facades\Route;
// Importamos nuestro controlador (el cerebro)
use App\Http\Controllers\UsuarioController;

// Cambiamos la ruta raíz para que cargue directamente el listado de usuarios
Route::get('/', [UsuarioController::class, 'index']);

// Esta línea crea automáticamente las 7 rutas del CRUD (index, create, store, etc.)
Route::resource('usuarios', UsuarioController::class);
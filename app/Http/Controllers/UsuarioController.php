<?php

namespace App\Http\Controllers;

use App\Models\User; // Importamos el modelo User que ya viene en Laravel
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // 1. LISTADO: Muestra todos los usuarios
    public function index()
    {
        $usuarios = User::all();
        return view('usuarios.index', compact('usuarios'));
    }

    // 2. FORMULARIO CREAR: Muestra la vista para crear un usuario
    public function create()
    {
        return view('usuarios.create');
    }

    // 3. GUARDAR: Recibe los datos del formulario y los guarda en la DB
    public function store(Request $request)
    {
        User::create($request->all());
        return redirect()->route('usuarios.index');
    }

    // 4. VER DETALLE: Muestra un solo usuario
    public function show(User $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    // 5. FORMULARIO EDITAR: Muestra el formulario con los datos cargados
    public function edit(User $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    // 6. ACTUALIZAR: Guarda los cambios del formulario de edición
    public function update(Request $request, User $usuario)
    {
        $usuario->update($request->all());
        return redirect()->route('usuarios.index');
    }

    // 7. ELIMINAR: Borra al usuario de la base de datos
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
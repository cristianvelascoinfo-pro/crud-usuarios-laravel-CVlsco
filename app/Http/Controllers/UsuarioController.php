<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

    // 3. GUARDAR: Recibe los datos y los guarda en la DB
    public function store(Request $request)
    {
        // Validación estricta para evitar el bucle de redirección
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:4', // Ajustado a 4 caracteres según tus pruebas
            'profesion' => 'nullable|string|max:255',
        ]);

        User::create([
            'nombre' => $request->nombre,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            // Guardamos la versión plana solo para la función "Ver" (Ojo ocultador)
            'password_plain' => $request->password, 
            'profesion' => $request->profesion,
        ]);

        return redirect()->route('usuarios.index');
    }

    // 4. VER DETALLE: Muestra un solo usuario
    public function show(User $usuario)
    {
        // $usuario se carga automáticamente por Route Model Binding
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
        $request->validate([
            'nombre' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $usuario->id,
            'password' => 'nullable|min:4', // Opcional al editar
            'profesion' => 'nullable|string|max:255',
        ]);

        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->profesion = $request->profesion;

        // Si el usuario escribió una nueva contraseña, la actualizamos en ambos campos
        if ($request->filled('password')) {
            $usuario->password = Hash::make($request->password);
            $usuario->password_plain = $request->password;
        }

        $usuario->save();

        return redirect()->route('usuarios.index');
    }

    // 7. ELIMINAR: Borra al usuario de la base de datos
    public function destroy(User $usuario)
    {
        $usuario->delete();
        return redirect()->route('usuarios.index');
    }
}
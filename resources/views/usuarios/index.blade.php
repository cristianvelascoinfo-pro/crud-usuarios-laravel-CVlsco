<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control - Usuarios</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #0f172a; color: #f8fafc; font-family: 'Inter', sans-serif; }
        .glass { 
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="antialiased">
    <div class="max-w-5xl mx-auto p-4 md:p-12">
        <div class="flex flex-col md:flex-row justify-between items-center mb-12 gap-6">
            <div>
                <h1 class="text-4xl font-black tracking-tight text-white">
                    Panel de <span class="text-cyan-400">Control</span>
                </h1>
                <p class="text-slate-400 mt-2">Gestión de usuarios del sistema (C R U D) por; CRISTIAN VELASCO</p>
            </div>
            <a href="{{ route('usuarios.create') }}" class="group relative inline-flex items-center justify-center px-8 py-3 font-bold text-white transition-all duration-200 bg-cyan-600 font-pj rounded-xl shadow-lg shadow-cyan-900/20 hover:bg-cyan-500">
                + Añadir Usuario
            </a>
        </div>

        <div class="glass rounded-3xl shadow-2xl overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-left">
                    <thead>
                        <tr class="bg-slate-800/40 border-b border-slate-700/50">
                            <th class="p-5 font-bold text-cyan-400 uppercase text-xs tracking-widest">Información</th>
                            <th class="p-5 font-bold text-cyan-400 uppercase text-xs tracking-widest">Profesión</th>
                            <th class="p-5 font-bold text-cyan-400 uppercase text-xs tracking-widest text-right">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-700/30">
                        @foreach($usuarios as $usuario)
                        <tr class="hover:bg-slate-800/40 transition-all group">
                            <td class="p-5">
                                <div class="font-bold text-lg text-white group-hover:text-cyan-300 transition-colors">{{ $usuario->nombre }}</div>
                                <div class="text-sm text-slate-400">{{ $usuario->email }}</div>
                            </td>
                            <td class="p-5 text-slate-300">
                                <span class="bg-slate-800 px-3 py-1 rounded-full text-sm border border-slate-700">
                                    {{ $usuario->profesion }}
                                </span>
                            </td>
                            <td class="p-5 text-right space-x-4">
                                <a href="{{ route('usuarios.show', $usuario->id) }}" class="text-cyan-400 hover:text-cyan-300 font-bold text-xs tracking-tighter transition">VER</a>
                                
                                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="text-amber-400 hover:text-amber-300 font-bold text-xs tracking-tighter transition">EDITAR</a>
                                
                                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="inline">
                                    @csrf 
                                    @method('DELETE')
                                    <button class="text-red-500 hover:text-red-400 font-bold text-xs tracking-tighter transition uppercase">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
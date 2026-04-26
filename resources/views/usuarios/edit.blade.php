<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Registro - Sistema</title>
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
<body class="min-h-screen flex items-center justify-center p-6 antialiased">
    <div class="glass p-10 rounded-3xl shadow-2xl w-full max-w-lg border-t-4 border-amber-500">
        <header class="mb-8">
            <h1 class="text-3xl font-black text-white italic tracking-tighter">
                MODIFICAR <span class="text-amber-400 italic">DATOS</span>
            </h1>
            <p class="text-slate-400 text-sm">ID de Registro: #{{ $usuario->id }}</p>
        </header>
        
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT') <div>
                <label class="block text-xs font-black text-amber-500 uppercase tracking-widest mb-2">Nombre Completo</label>
                <input type="text" name="nombre" value="{{ $usuario->nombre }}" required class="w-full bg-slate-900/50 border border-slate-700 rounded-xl p-4 text-white focus:ring-2 focus:ring-amber-500 focus:border-transparent outline-none transition-all">
            </div>

            <div>
                <label class="block text-xs font-black text-amber-500 uppercase tracking-widest mb-2">Email de Acceso</label>
                <input type="email" name="email" value="{{ $usuario->email }}" required class="w-full bg-slate-900/50 border border-slate-700 rounded-xl p-4 text-white focus:ring-2 focus:ring-amber-500 focus:border-transparent outline-none transition-all">
            </div>

            <div>
                <label class="block text-xs font-black text-amber-500 uppercase tracking-widest mb-2">Especialidad Actual</label>
                <input type="text" name="profesion" value="{{ $usuario->profesion }}" class="w-full bg-slate-900/50 border border-slate-700 rounded-xl p-4 text-white focus:ring-2 focus:ring-amber-500 focus:border-transparent outline-none transition-all">
            </div>

            <div class="flex items-center justify-between pt-6">
                <a href="{{ route('usuarios.index') }}" class="text-slate-500 hover:text-white font-bold transition text-sm">← ABORTAR</a>
                <button type="submit" class="bg-amber-600 hover:bg-amber-500 text-white font-black py-4 px-10 rounded-2xl shadow-xl shadow-amber-900/40 transition-all transform hover:-translate-y-1 active:scale-95">
                    GUARDAR CAMBIOS
                </button>
            </div>
        </form>
    </div>
</body>
</html>
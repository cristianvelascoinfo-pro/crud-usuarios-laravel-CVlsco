<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expediente de Usuario</title>
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
<body class="min-h-screen flex items-center justify-center p-6">
    <div class="glass p-10 rounded-3xl shadow-2xl w-full max-w-2xl border-l-4 border-cyan-500">
        <div class="flex justify-between items-center mb-10">
            <h1 class="text-3xl font-black text-white tracking-tighter uppercase italic">
                Detalles del <span class="text-cyan-400">Usuario</span>
            </h1>
            <span class="text-slate-500 font-mono text-xs">ID: #{{ $usuario->id }}</span>
        </div>

        <div class="space-y-8">
            <div class="border-l-2 border-slate-700 pl-4">
                <label class="block text-xs font-bold text-cyan-500 uppercase tracking-widest mb-1">Nombre Completo</label>
                <p class="text-2xl font-semibold text-white">{{ $usuario->nombre }}</p>
            </div>

            <div class="border-l-2 border-slate-700 pl-4">
                <label class="block text-xs font-bold text-cyan-500 uppercase tracking-widest mb-1">Correo Electrónico</label>
                <p class="text-xl text-slate-300 italic">{{ $usuario->email }}</p>
            </div>

            <div class="border-l-2 border-slate-700 pl-4">
                <label class="block text-xs font-bold text-cyan-500 uppercase tracking-widest mb-1">Especialidad</label>
                <p class="text-xl text-slate-300">{{ $usuario->profesion ?? 'No especificada' }}</p>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-slate-800 flex justify-between items-center">
            <a href="{{ route('usuarios.index') }}" class="text-slate-500 hover:text-white font-bold transition text-sm tracking-widest">← VOLVER</a>
            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="bg-amber-500/20 text-amber-500 border border-amber-500/50 px-6 py-2 rounded-xl font-bold hover:bg-amber-500 hover:text-white transition">EDITAR PERFIL</a>
        </div>
    </div>
</body>
</html>
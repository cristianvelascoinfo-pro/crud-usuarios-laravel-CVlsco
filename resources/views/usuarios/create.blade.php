<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario - Futurista</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body { background-color: #0f172a; color: #f8fafc; }
        .glass { background: rgba(30, 41, 59, 0.7); backdrop-filter: blur(12px); border: 1px solid rgba(255, 255, 255, 0.1); }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 antialiased">
    <div class="glass p-10 rounded-3xl shadow-2xl w-full max-w-lg border-t-4 border-cyan-500">
        <header class="mb-8">
            <h1 class="text-3xl font-black text-white italic tracking-tighter">
                NUEVO <span class="text-cyan-400 italic">REGISTRO</span>
            </h1>
            <p class="text-slate-400 text-sm">Completa los campos para la base de datos.</p>
        </header>
        
        <form action="{{ route('usuarios.store') }}" method="POST" class="space-y-6">
            @csrf
            <div>
                <label class="block text-xs font-black text-cyan-500 uppercase tracking-widest mb-2">Nombre Completo</label>
                <input type="text" name="nombre" required class="w-full bg-slate-900/50 border border-slate-700 rounded-xl p-4 text-white focus:ring-2 focus:ring-cyan-500 focus:border-transparent outline-none transition-all placeholder-slate-600" placeholder="Ej. Cristian Velasco">
            </div>

            <div>
                <label class="block text-xs font-black text-cyan-500 uppercase tracking-widest mb-2">Email Corporativo</label>
                <input type="email" name="email" required class="w-full bg-slate-900/50 border border-slate-700 rounded-xl p-4 text-white focus:ring-2 focus:ring-cyan-500 focus:border-transparent outline-none transition-all placeholder-slate-600" placeholder="correo@ejemplo.com">
            </div>

            <div>
                <label class="block text-xs font-black text-cyan-500 uppercase tracking-widest mb-2">Especialidad / Profesión</label>
                <input type="text" name="profesion" class="w-full bg-slate-900/50 border border-slate-700 rounded-xl p-4 text-white focus:ring-2 focus:ring-cyan-500 focus:border-transparent outline-none transition-all placeholder-slate-600" placeholder="Estudiante/Docente">
            </div>

            <div class="flex items-center justify-between pt-6">
                <a href="{{ route('usuarios.index') }}" class="text-slate-500 hover:text-white font-bold transition text-sm">← CANCELAR</a>
                <button type="submit" class="bg-cyan-600 hover:bg-cyan-500 text-white font-black py-4 px-10 rounded-2xl shadow-xl shadow-cyan-900/40 transition-all transform hover:-translate-y-1 active:scale-95">
                    REGISTRAR USUARIO
                </button>
            </div>
        </form>
    </div>
</body>
</html>
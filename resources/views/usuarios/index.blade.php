<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA CRUD - Panel de Control</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body { 
            background-color: #0b1120; 
            color: #f8fafc; 
            font-family: 'Inter', sans-serif;
            background-image: radial-gradient(circle at 0% 0%, #1e293b 0%, #0b1120 100%);
        }
        .font-futura { font-family: 'Orbitron', sans-serif; }
        .glass { 
            background: rgba(15, 23, 42, 0.6); 
            backdrop-filter: blur(20px); 
            border: 1px solid rgba(34, 211, 238, 0.1); 
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        .neon-border { border-bottom: 2px solid rgba(34, 211, 238, 0.3); }
        .row-hover:hover {
            background: rgba(34, 211, 238, 0.05);
            box-shadow: inset 5px 0 0 #22d3ee;
        }
    </style>
</head>
<body class="antialiased min-h-screen pb-12">
    <div class="max-w-6xl mx-auto p-4 md:p-12">
        
        <!-- HEADER FUTURISTA -->
        <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
            <div>
                <div class="flex items-center gap-3 mb-2">
                    <div class="h-2 w-12 bg-cyan-500 rounded-full animate-pulse"></div>
                    <span class="text-cyan-500 font-futura text-[10px] tracking-[0.4em] uppercase">Status: Online</span>
                </div>
                <h1 class="text-5xl font-black tracking-tighter text-white font-futura uppercase italic">
                    PANEL DE <span class="text-cyan-400">CONTROL</span>
                </h1>
                <p class="text-slate-400 mt-2 text-sm font-light tracking-wide">
                    Terminal de gestión de datos / <span class="text-slate-200 font-bold uppercase">Cristian Velasco</span>
                </p>
            </div>
            
            <a href="{{ route('usuarios.create') }}" class="font-futura group relative inline-flex items-center justify-center px-10 py-4 font-black text-slate-950 transition-all duration-300 bg-cyan-400 rounded-xl shadow-[0_0_20px_rgba(34,211,238,0.3)] hover:bg-cyan-300 hover:shadow-[0_0_30px_rgba(34,211,238,0.5)] transform hover:-translate-y-1">
                + AÑADIR REGISTRO
            </a>
        </div>

        <!-- TABLA GLASSMORPHISM -->
        <div class="glass rounded-[2rem] overflow-hidden border border-slate-800">
            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-slate-900/80 neon-border">
                            <th class="p-6 font-futura text-[10px] text-cyan-400 uppercase tracking-[0.3em]">Información de Identidad</th>
                            <th class="p-6 font-futura text-[10px] text-cyan-400 uppercase tracking-[0.3em]">Especialidad</th>
                            <th class="p-6 font-futura text-[10px] text-cyan-400 uppercase tracking-[0.3em] text-right">Protocolos</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-800/50">
                        @foreach($usuarios as $usuario)
                        <tr class="row-hover transition-all group">
                            <td class="p-6">
                                <div class="flex flex-col">
                                    <span class="font-bold text-xl text-white group-hover:text-cyan-400 transition-colors duration-300">{{ $usuario->nombre }}</span>
                                    <span class="text-sm text-slate-500 font-mono italic">{{ $usuario->email }}</span>
                                    <!-- INDICADOR DE CONTRASEÑA -->
                                    <div class="mt-2 flex items-center gap-2">
                                        <span class="h-1.5 w-1.5 rounded-full bg-emerald-500"></span>
                                        <span class="text-[9px] text-slate-600 font-futura uppercase tracking-tighter">🔒 Password Hash: Secured</span>
                                    </div>
                                </div>
                            </td>
                            <td class="p-6">
                                <span class="bg-slate-900/80 text-cyan-400 px-4 py-1.5 rounded-lg text-xs font-bold border border-cyan-900/50 font-futura">
                                    {{ $usuario->profesion ?? 'SIN ROL' }}
                                </span>
                            </td>
                            <td class="p-6 text-right">
                                <div class="flex justify-end items-center gap-6">
                                    <a href="{{ route('usuarios.show', $usuario->id) }}" class="font-futura text-[10px] text-slate-400 hover:text-white tracking-[0.2em] transition-all">VER</a>
                                    
                                    <a href="{{ route('usuarios.edit', $usuario->id) }}" class="font-futura text-[10px] text-amber-500 hover:text-amber-300 tracking-[0.2em] transition-all">EDITAR</a>
                                    
                                    <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" class="inline">
                                        @csrf 
                                        @method('DELETE')
                                        <button class="font-futura text-[10px] text-red-600 hover:text-red-400 tracking-[0.2em] transition-all uppercase">Eliminar</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- FOOTER / DECORACIÓN -->
        <div class="mt-8 flex justify-between items-center text-[10px] text-slate-600 font-futura uppercase tracking-[0.5em]">
            <span>System v4.0.1</span>
            <span class="animate-pulse">● Proccessing Data Stream</span>
        </div>
    </div>
</body>
</html>
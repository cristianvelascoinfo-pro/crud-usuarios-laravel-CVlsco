<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Registro - Sistema IA</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700;900&family=Inter:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body { 
            background-color: #0b1120; 
            color: #f8fafc; 
            font-family: 'Inter', sans-serif;
            background-image: radial-gradient(circle at 50% 50%, #1e293b 0%, #0b1120 100%);
        }
        .font-futura { font-family: 'Orbitron', sans-serif; }
        .glass-edit { 
            background: rgba(15, 23, 42, 0.8); 
            backdrop-filter: blur(20px); 
            border: 1px solid rgba(245, 158, 11, 0.2); 
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.6);
        }
        .input-cyber {
            background: rgba(2, 6, 23, 0.8);
            border: 1px solid #334155;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .input-cyber:focus {
            border-color: #f59e0b;
            box-shadow: 0 0 20px rgba(245, 158, 11, 0.15);
            background: rgba(15, 23, 42, 0.9);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 antialiased">
    
    <div class="glass-edit p-10 rounded-[2.5rem] w-full max-w-lg relative overflow-hidden border-t-[6px] border-amber-500">
        <!-- Decoración de Fondo -->
        <div class="absolute -top-24 -right-24 w-48 h-48 bg-amber-500/10 rounded-full blur-3xl"></div>

        <header class="mb-10 relative">
            <h1 class="text-4xl font-black text-white italic tracking-tighter font-futura uppercase">
                MODIFICAR <span class="text-amber-500">DATOS</span>
            </h1>
            <div class="flex items-center gap-2 mt-2">
                <span class="h-1 w-1 bg-amber-500 animate-ping"></span>
                <p class="text-slate-500 text-[10px] tracking-[0.3em] font-futura uppercase">ID de Registro: #{{ $usuario->id }}</p>
            </div>
        </header>
        
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="space-y-8 relative">
            @csrf
            @method('PUT') 
            
            <div class="group">
                <label class="block text-[10px] font-black text-amber-500 uppercase tracking-[0.2em] mb-3 font-futura transition-all group-focus-within:translate-x-1">Nombre Completo</label>
                <input type="text" name="nombre" value="{{ $usuario->nombre }}" required 
                    class="input-cyber w-full rounded-2xl p-4 text-white outline-none font-medium">
            </div>

            <div class="group">
                <label class="block text-[10px] font-black text-amber-500 uppercase tracking-[0.2em] mb-3 font-futura transition-all group-focus-within:translate-x-1">Email de Acceso</label>
                <input type="email" name="email" value="{{ $usuario->email }}" required 
                    class="input-cyber w-full rounded-2xl p-4 text-slate-300 outline-none font-mono">
            </div>

            <div class="group">
                <label class="block text-[10px] font-black text-amber-500 uppercase tracking-[0.2em] mb-3 font-futura transition-all group-focus-within:translate-x-1">Especialidad Actual</label>
                <input type="text" name="profesion" value="{{ $usuario->profesion }}" 
                    class="input-cyber w-full rounded-2xl p-4 text-white outline-none">
            </div>

            <!-- CAMPO DE CONTRASEÑA CON OJO -->
            <div class="group">
                <label class="block text-[10px] font-black text-amber-500 uppercase tracking-[0.2em] mb-3 font-futura transition-all group-focus-within:translate-x-1">Nueva Contraseña</label>
                <div class="relative">
                    <input type="password" name="password" id="password_input" placeholder="Dejar en blanco para mantener actual"
                        class="input-cyber w-full rounded-2xl p-4 text-white outline-none font-mono pr-12">
                    
                    <button type="button" onclick="togglePasswordVisibility()" class="absolute right-4 top-1/2 -translate-y-1/2 text-slate-500 hover:text-amber-500 transition-colors">
                        <svg id="eye_svg" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
            </div>

            <div class="flex items-center justify-between pt-8 border-t border-slate-800/50">
                <a href="{{ route('usuarios.index') }}" class="text-slate-600 hover:text-white font-bold transition-all text-xs tracking-widest font-futura uppercase">
                    ← Abortar
                </a>
                
                <button type="submit" class="relative group overflow-hidden bg-amber-600 px-10 py-4 rounded-2xl transition-all hover:scale-105 active:scale-95 shadow-[0_10px_30px_rgba(217,119,6,0.2)]">
                    <div class="absolute inset-0 bg-gradient-to-r from-amber-400 to-orange-600 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    <span class="relative font-futura text-xs font-black text-white uppercase tracking-widest">
                        Guardar Cambios
                    </span>
                </button>
            </div>
        </form>
    </div>

    <!-- Script para mostrar/ocultar password -->
    <script>
        function togglePasswordVisibility() {
            const input = document.getElementById('password_input');
            input.type = input.type === 'password' ? 'text' : 'password';
        }
    </script>
</body>
</html>
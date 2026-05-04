<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expediente de Usuario - Sistema IA</title>
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
        .glass { 
            background: rgba(15, 23, 42, 0.8); 
            backdrop-filter: blur(20px); 
            border: 1px solid rgba(34, 211, 238, 0.2); 
            box-shadow: 0 0 40px rgba(0, 0, 0, 0.5), inset 0 0 20px rgba(34, 211, 238, 0.05);
        }
        .data-container {
            border-left: 2px solid rgba(51, 65, 85, 0.5);
            padding-left: 1.5rem;
            transition: all 0.3s ease;
        }
        .data-container:hover {
            border-left-color: #22d3ee;
            background: rgba(34, 211, 238, 0.02);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 antialiased">
    
    <div class="glass p-10 rounded-[2rem] w-full max-w-2xl relative overflow-hidden border-l-[6px] border-cyan-500">
        <!-- Badge de ID Superior -->
        <div class="absolute top-8 right-10">
            <span class="font-futura text-[10px] tracking-[0.3em] text-slate-500 uppercase">ID: #{{ $usuario->id }}</span>
        </div>

        <header class="mb-12">
            <h1 class="text-4xl font-black text-white italic tracking-tighter font-futura uppercase">
                DETALLES DEL <span class="text-cyan-400">USUARIO</span>
            </h1>
        </header>
        
        <div class="space-y-10">
            <!-- NOMBRE -->
            <div class="data-container">
                <label class="block text-[10px] font-bold text-cyan-500 uppercase tracking-[0.2em] mb-2 font-futura">Nombre Completo</label>
                <p class="text-3xl font-bold text-white tracking-tight">{{ $usuario->nombre }}</p>
            </div>

            <!-- EMAIL -->
            <div class="data-container">
                <label class="block text-[10px] font-bold text-cyan-500 uppercase tracking-[0.2em] mb-2 font-futura">Correo Electrónico</label>
                <p class="text-xl text-slate-300 italic font-light">{{ $usuario->email }}</p>
            </div>

            <!-- PROFESIÓN -->
            <div class="data-container">
                <label class="block text-[10px] font-bold text-cyan-500 uppercase tracking-[0.2em] mb-2 font-futura">Especialidad</label>
                <p class="text-xl text-white">{{ $usuario->profesion ?? 'No especificada' }}</p>
            </div>

            <!-- PASSWORD (NUEVA SECCIÓN CON OJO) -->
            <div class="data-container">
                <label class="block text-[10px] font-bold text-cyan-500 uppercase tracking-[0.2em] mb-2 font-futura">Contraseña Registrada</label>
                <div class="flex items-center gap-4">
                    <!-- Mostramos la contraseña oculta por defecto -->
                    <input type="password" id="password_display" value="{{ $usuario->password_plain ?? '********' }}" readonly 
                        class="bg-transparent text-xl text-slate-400 font-mono outline-none border-none w-full">
                    
                    <button type="button" onclick="togglePasswordView()" class="text-cyan-500 hover:text-cyan-300 transition-all p-2 bg-cyan-500/10 rounded-lg">
                        <svg id="eye_icon" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-slate-800/50 flex justify-between items-center">
            <a href="{{ route('usuarios.index') }}" class="text-slate-500 hover:text-cyan-400 font-bold transition-all text-xs tracking-widest font-futura uppercase">
                ← Volver
            </a>
            
            <a href="{{ route('usuarios.edit', $usuario->id) }}" class="group relative px-8 py-3 bg-amber-500/10 border border-amber-500/50 rounded-xl transition-all hover:bg-amber-500 shadow-[0_0_15px_rgba(245,158,11,0.1)] hover:shadow-[0_0_25px_rgba(245,158,11,0.4)]">
                <span class="font-futura text-xs font-black text-amber-500 group-hover:text-slate-950 transition-colors uppercase tracking-widest">
                    Editar Perfil
                </span>
            </a>
        </div>
    </div>

    <!-- Script para el ojo ocultador -->
    <script>
        function togglePasswordView() {
            const passInput = document.getElementById('password_display');
            const type = passInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passInput.setAttribute('type', type);
        }
    </script>
</body>
</html>
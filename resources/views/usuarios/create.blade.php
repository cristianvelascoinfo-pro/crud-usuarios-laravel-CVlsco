<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Registro - Sistema CRUD</title>
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
        .input-futuristic {
            background: rgba(2, 6, 23, 0.6);
            border: 1px solid rgba(51, 65, 85, 1);
            transition: all 0.3s ease;
        }
        .input-futuristic:focus {
            border-color: #22d3ee;
            box-shadow: 0 0 15px rgba(34, 211, 238, 0.3);
            background: rgba(15, 23, 42, 0.8);
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-6 antialiased">
    
    <div class="glass p-10 rounded-[2rem] w-full max-w-lg relative overflow-hidden">
        <!-- Decoración neón superior -->
        <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-transparent via-cyan-500 to-transparent"></div>

        <header class="mb-10">
            <h1 class="text-4xl font-black text-white italic tracking-tighter font-futura uppercase">
                NUEVO <span class="text-cyan-400">REGISTRO</span>
            </h1>
            <p class="text-slate-400 text-xs tracking-widest uppercase mt-2">Completa los campos para la base de datos.</p>
        </header>
        
        <form action="{{ route('usuarios.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <!-- NOMBRE -->
            <div>
                <label class="block text-[10px] font-bold text-cyan-500 uppercase tracking-[0.2em] mb-2 font-futura">Nombre Completo</label>
                <input type="text" name="nombre" required 
                    class="input-futuristic w-full rounded-xl p-4 text-white outline-none placeholder-slate-700" 
                    placeholder="Ej. Cristian Velasco">
            </div>

            <!-- EMAIL -->
            <div>
                <label class="block text-[10px] font-bold text-cyan-500 uppercase tracking-[0.2em] mb-2 font-futura">Email Corporativo</label>
                <input type="email" name="email" required 
                    class="input-futuristic w-full rounded-xl p-4 text-white outline-none placeholder-slate-700" 
                    placeholder="correo@ejemplo.com">
            </div>

            <!-- NUEVO CAMPO: CONTRASEÑA (Basado en tu requerimiento) -->
            <div>
                <label class="block text-[10px] font-bold text-cyan-500 uppercase tracking-[0.2em] mb-2 font-futura">Contraseña de Acceso</label>
                <input type="password" name="password" required 
                    class="input-futuristic w-full rounded-xl p-4 text-white outline-none placeholder-slate-700" 
                    placeholder="••••••••">
            </div>

            <!-- PROFESIÓN -->
            <div>
                <label class="block text-[10px] font-bold text-cyan-500 uppercase tracking-[0.2em] mb-2 font-futura">Especialidad / Profesión</label>
                <input type="text" name="profesion" 
                    class="input-futuristic w-full rounded-xl p-4 text-white outline-none placeholder-slate-700" 
                    placeholder="Estudiante/Docente">
            </div>

            <div class="flex items-center justify-between pt-8">
                <a href="{{ route('usuarios.index') }}" class="text-slate-500 hover:text-cyan-400 font-bold transition-all text-xs tracking-widest font-futura">
                    ← CANCELAR
                </a>
                <button type="submit" class="bg-cyan-500 hover:bg-cyan-400 text-slate-950 font-black py-4 px-8 rounded-xl shadow-[0_0_20px_rgba(34,211,238,0.4)] transition-all transform hover:-translate-y-1 active:scale-95 font-futura text-sm">
                    REGISTRAR USUARIO
                </button>
            </div>
        </form>
    </div>

</body>
</html>
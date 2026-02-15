<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daniel Barrios | Ingeniero en Sistemas</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        body {
            background-color: #020617; /* Fondo ultra oscuro */
            background-image: radial-gradient(circle at top right, #1e293b 0%, #020617 50%);
        }
        .glass {
            background: rgba(30, 41, 59, 0.4);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
        }
        .text-gradient {
            background: linear-gradient(to r, #60a5fa, #34d399);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="text-slate-300 antialiased font-sans">

    <header class="py-24 px-4 text-center" data-aos="zoom-in" data-aos-duration="1000">
        <h1 class="text-6xl md:text-7xl font-black text-gradient mb-4">
            Barrios Herrera Daniel
        </h1>
        <p class="text-xl md:text-2xl text-slate-400 font-light tracking-widest uppercase">
            Ingeniero en Sistemas | Especialista Laravel
        </p>
        
        <div class="mt-8 flex flex-wrap justify-center gap-4" data-aos="fade-up" data-aos-delay="400">
            <div class="flex flex-col items-center p-3 glass rounded-xl border border-slate-700 hover:border-blue-500 transition-all w-24">
                <span class="text-2xl">🐘</span>
                <span class="text-[10px] mt-1 font-bold">PHP 8.x</span>
            </div>
            <div class="flex flex-col items-center p-3 glass rounded-xl border border-slate-700 hover:border-red-500 transition-all w-24">
                <span class="text-2xl">🔥</span>
                <span class="text-[10px] mt-1 font-bold">LARAVEL</span>
            </div>
            <div class="flex flex-col items-center p-3 glass rounded-xl border border-slate-700 hover:border-cyan-500 transition-all w-24">
                <span class="text-2xl">🌐</span>
                <span class="text-[10px] mt-1 font-bold">CISCO</span>
            </div>
            <div class="flex flex-col items-center p-3 glass rounded-xl border border-slate-700 hover:border-yellow-500 transition-all w-24">
                <span class="text-2xl">💾</span>
                <span class="text-[10px] mt-1 font-bold">SQLITE</span>
            </div>
        </div>
    </header>

    <main class="container mx-auto pb-32 px-4">
        
        <h2 class="text-3xl font-bold mb-12 flex items-center gap-4" data-aos="fade-right">
            <span class="w-16 h-1 bg-gradient-to-r from-blue-500 to-emerald-500 rounded-full"></span>
            Proyectos y Certificaciones
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($proyectos as $proyecto)
                <div data-aos="fade-up" data-aos-delay="{{ $loop->index * 150 }}">
                    <a href="/img/{{ $proyecto->imagen_path }}" target="_blank" class="group block">
                        <div class="glass rounded-[2rem] overflow-hidden border border-slate-800 group-hover:border-blue-500/50 transition-all duration-500 shadow-2xl group-hover:-translate-y-3">
                            
                            <div class="relative overflow-hidden aspect-video bg-slate-950 flex items-center justify-center p-8">
                                <img src="/img/{{ $proyecto->imagen_path }}" 
                                     alt="{{ $proyecto->nombre }}" 
                                     class="max-w-full max-h-full object-contain transition-transform duration-700 group-hover:scale-110"
                                     style="filter: drop-shadow(0 0 10px rgba(59, 130, 246, 0.2));">
                                
                                <div class="absolute inset-0 bg-gradient-to-tr from-blue-500/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                            </div>

                            <div class="p-8">
                                <h3 class="text-2xl font-bold text-white group-hover:text-blue-400 transition-colors">
                                    {{ $proyecto->nombre }}
                                </h3>
                                <p class="text-slate-400 mt-4 text-sm leading-relaxed min-h-[60px]">
                                    {{ $proyecto->descripcion }}
                                </p>
                                
                                <div class="mt-6 pt-6 border-t border-slate-800/50 flex justify-between items-center text-[10px] tracking-tighter">
                                    <div class="flex flex-col">
                                        <span class="text-slate-500 uppercase font-black">ID Verificación</span>
                                        <span class="text-blue-400 font-mono text-sm uppercase">{{ $proyecto->link_verificacion }}</span>
                                    </div>
                                    <div class="bg-blue-600/20 text-blue-400 px-4 py-2 rounded-full font-bold group-hover:bg-blue-600 group-hover:text-white transition-all uppercase">
                                        Abrir Certificado
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

    </main>

    <footer class="text-center py-16 border-t border-slate-900 bg-slate-950/50">
        <p class="text-slate-500 text-sm">
            &copy; 2026 - <span class="text-slate-300 font-bold">Barrios Herrera Daniel</span>
        </p>
        <p class="text-[10px] text-slate-600 mt-2 uppercase tracking-[0.3em]">
            Desarrollado con Laravel 10 + Tailwind CSS + SQLite
        </p>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>
</body>
</html>
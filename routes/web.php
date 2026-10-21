<!DOCTYPE html>
<html lang="es" class="h-full bg-slate-900 text-slate-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IndieDex API — Documentación v0.1</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;600&family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        pre,
        code {
            font-family: 'Fira Code', monospace;
        }
    </style>
</head>

<body class="min-h-full flex flex-col justify-between">

    <!-- Header / Navbar -->
    <header class="border-b border-slate-800 bg-slate-900/80 backdrop-blur sticky top-0 z-50">
        <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
            <div class="flex items-center gap-3">
                <span class="text-3xl">🎮</span>
                <div>
                    <h1 class="font-extrabold text-xl tracking-tight text-white">IndieDex <span class="text-indigo-400 text-sm font-semibold ml-1">API v0.1</span></h1>
                    <p class="text-xs text-slate-400">Public & Open-Source Indie Games REST API</p>
                </div>
            </div>
            <div class="flex items-center gap-4 text-sm font-medium">
                <a href="#try-it" class="hover:text-indigo-400 transition-colors">Consola Interactiva</a>
                <a href="#endpoints" class="hover:text-indigo-400 transition-colors">Endpoints</a>
                <a href="#examples" class="hover:text-indigo-400 transition-colors">Ejemplos</a>
                <span class="bg-indigo-500/10 text-indigo-400 border border-indigo-500/20 px-2.5 py-1 rounded-full text-xs font-semibold">
                    v0.1-beta
                </span>
            </div>
        </div>
    </header>

    <main class="max-w-6xl mx-auto px-4 py-10 w-full space-y-16">

        <!-- Hero Section -->
        <section class="text-center space-y-4 max-w-3xl mx-auto">
            <h2 class="text-4xl sm:text-5xl font-black tracking-tight text-white">
                El universo indie en una <span class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-400 to-violet-400">API RESTful pública</span>
            </h2>
            <p class="text-slate-400 text-lg">
                Consulta datos estructurados sobre videojuegos independientes, personajes, desarrolladores, motores gráficos y plataformas. Diseñada para proyectos de práctica y pruebas.
            </p>
            <div class="pt-2 flex flex-wrap justify-center gap-3 text-xs text-slate-300 font-mono">
                <span class="bg-slate-800 border border-slate-700 px-3 py-1.5 rounded-md">✓ JSON Estandarizado</span>
                <span class="bg-slate-800 border border-slate-700 px-3 py-1.5 rounded-md">✓ Paginación Incluida</span>
                <span class="bg-slate-800 border border-slate-700 px-3 py-1.5 rounded-md">✓ Sin Autenticación</span>
            </div>
        </section>

        <!-- Interactive Playground / Try It Section -->
        <section id="try-it" class="bg-slate-800/60 border border-slate-700/60 rounded-2xl p-6 shadow-xl space-y-4">
            <div class="flex items-center justify-between">
                <h3 class="text-lg font-bold text-white flex items-center gap-2">
                    <span>⚡</span> Probar la API en vivo
                </h3>
                <span class="text-xs text-slate-400">Ingresa una ruta y presiona Ejecutar</span>
            </div>

            <!-- URL Input Bar -->
            <div class="flex rounded-lg overflow-hidden border border-slate-600 bg-slate-900 focus-within:border-indigo-500 transition-all">
                <span class="bg-slate-800 text-slate-400 px-4 py-3 text-sm font-mono flex items-center border-r border-slate-700 select-none">
                    {{ url('/api') }}/
                </span>
                <input
                    type="text"
                    id="api-endpoint"
                    value="games/1"
                    class="w-full bg-transparent px-4 py-3 font-mono text-sm text-indigo-300 focus:outline-none placeholder-slate-600"
                    placeholder="games/1">
                <button
                    id="btn-fetch"
                    onclick="fetchApiData()"
                    class="bg-indigo-600 hover:bg-indigo-500 text-white px-6 py-3 font-semibold text-sm transition-colors flex items-center gap-2">
                    <span>Ejecutar</span>
                </button>
            </div>

            <!-- Quick Endpoint Presets -->
            <div class="flex flex-wrap items-center gap-2 text-xs">
                <span class="text-slate-400 font-medium">Ejemplos rápidos:</span>
                <button onclick="setEndpoint('games')" class="text-indigo-400 hover:underline font-mono">/games</button>
                <span class="text-slate-600">•</span>
                <button onclick="setEndpoint('games/1')" class="text-indigo-400 hover:underline font-mono">/games/1</button>
                <span class="text-slate-600">•</span>
                <button onclick="setEndpoint('characters')" class="text-indigo-400 hover:underline font-mono">/characters</button>
                <span class="text-slate-600">•</span>
                <button onclick="setEndpoint('engines')" class="text-indigo-400 hover:underline font-mono">/engines</button>
                <span class="text-slate-600">•</span>
                <button onclick="setEndpoint('developers')" class="text-indigo-400 hover:underline font-mono">/developers</button>
            </div>

            <!-- JSON Output Viewer -->
            <div class="relative">
                <div class="absolute top-3 right-3 flex items-center gap-2">
                    <span id="status-badge" class="hidden text-xs font-mono px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/20">200 OK</span>
                    <button onclick="copyToClipboard()" class="text-xs text-slate-400 hover:text-white bg-slate-700/60 hover:bg-slate-700 px-2.5 py-1 rounded transition-colors">Copiar</button>
                </div>
                <pre class="bg-slate-950 border border-slate-800 rounded-xl p-4 text-xs overflow-x-auto text-slate-300 max-h-[450px] leading-relaxed"><code id="json-output">Cargando respuesta de prueba...</code></pre>
            </div>
        </section>

        <!-- Endpoints Documentation Section -->
        <section id="endpoints" class="space-y-6">
            <div class="border-b border-slate-800 pb-3">
                <h3 class="text-2xl font-bold text-white">Resumen de Endpoints (v0.1)</h3>
                <p class="text-sm text-slate-400">Todos los endpoints devuelven respuestas en formato JSON estandarizado.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-4">
                <!-- Endpoint Card -->
                <div class="bg-slate-800/40 border border-slate-800 p-4 rounded-xl space-y-2">
                    <div class="flex items-center gap-2 font-mono text-sm">
                        <span class="bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-2 py-0.5 rounded font-bold">GET</span>
                        <span class="text-white font-semibold">/api/games</span>
                    </div>
                    <p class="text-xs text-slate-400">Obtiene la lista paginada de todos los juegos indies disponibles.</p>
                    <div class="text-xs text-slate-500 font-mono">Soporta: ?search=, ?engine=, ?page=</div>
                </div>

                <!-- Endpoint Card -->
                <div class="bg-slate-800/40 border border-slate-800 p-4 rounded-xl space-y-2">
                    <div class="flex items-center gap-2 font-mono text-sm">
                        <span class="bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-2 py-0.5 rounded font-bold">GET</span>
                        <span class="text-white font-semibold">/api/games/{id}</span>
                    </div>
                    <p class="text-xs text-slate-400">Devuelve la información detallada de un juego, incluyendo personajes y roles.</p>
                </div>

                <!-- Endpoint Card -->
                <div class="bg-slate-800/40 border border-slate-800 p-4 rounded-xl space-y-2">
                    <div class="flex items-center gap-2 font-mono text-sm">
                        <span class="bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-2 py-0.5 rounded font-bold">GET</span>
                        <span class="text-white font-semibold">/api/characters</span>
                    </div>
                    <p class="text-xs text-slate-400">Lista de personajes documentados en el ecosistema.</p>
                    <div class="text-xs text-slate-500 font-mono">Soporta: ?search=, ?page=</div>
                </div>

                <!-- Endpoint Card -->
                <div class="bg-slate-800/40 border border-slate-800 p-4 rounded-xl space-y-2">
                    <div class="flex items-center gap-2 font-mono text-sm">
                        <span class="bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-2 py-0.5 rounded font-bold">GET</span>
                        <span class="text-white font-semibold">/api/developers</span>
                    </div>
                    <p class="text-xs text-slate-400">Lista de estudios independientes creadores de los juegos.</p>
                </div>

                <!-- Endpoint Card -->
                <div class="bg-slate-800/40 border border-slate-800 p-4 rounded-xl space-y-2">
                    <div class="flex items-center gap-2 font-mono text-sm">
                        <span class="bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-2 py-0.5 rounded font-bold">GET</span>
                        <span class="text-white font-semibold">/api/engines</span>
                    </div>
                    <p class="text-xs text-slate-400">Motores de desarrollo asociados (Godot, Unity, GameMaker, etc.).</p>
                </div>

                <!-- Endpoint Card -->
                <div class="bg-slate-800/40 border border-slate-800 p-4 rounded-xl space-y-2">
                    <div class="flex items-center gap-2 font-mono text-sm">
                        <span class="bg-emerald-500/10 text-emerald-400 border border-emerald-500/20 px-2 py-0.5 rounded font-bold">GET</span>
                        <span class="text-white font-semibold">/api/platforms</span>
                    </div>
                    <p class="text-xs text-slate-400">Plataformas de distribución (PC, Switch, PS5, etc.).</p>
                </div>
            </div>
        </section>

        <!-- Code Examples Section -->
        <section id="examples" class="space-y-4">
            <div class="border-b border-slate-800 pb-3">
                <h3 class="text-2xl font-bold text-white">¿Cómo consumirla en tu Frontend?</h3>
                <p class="text-sm text-slate-400">Ejemplo práctico de integración usando JavaScript moderno (`fetch`).</p>
            </div>

            <pre class="bg-slate-950 border border-slate-800 rounded-xl p-5 text-xs text-indigo-200 leading-relaxed overflow-x-auto"><code>// Ejemplo: Obtener el detalle de Hollow Knight y sus personajes
fetch('{{ url('/api/games/1') }}')
  .then(response => response.json())
  .then(json => {
    console.log("Título:", json.data.title);
    console.log("Desarrollador:", json.data.developer.name);
    console.log("Personajes:", json.data.characters);
  })
  .catch(error => console.error('Error al consumir la API:', error));</code></pre>
        </section>

    </main>

    <!-- Footer -->
    <footer class="border-t border-slate-800 bg-slate-950/60 py-8 text-center text-xs text-slate-500 space-y-2">
        <p>IndieDex API v0.1 — Proyecto Open-Source para la comunidad de desarrollo.</p>
        <p>Desarrollado con Laravel & SQLite.</p>
    </footer>

    <!-- Interactive Script -->
    <script>
        const baseUrl = "{{ url('/api') }}/";

        function setEndpoint(path) {
            document.getElementById('api-endpoint').value = path;
            fetchApiData();
        }

        async function fetchApiData() {
            const endpointInput = document.getElementById('api-endpoint').value.trim();
            const outputElement = document.getElementById('json-output');
            const statusBadge = document.getElementById('status-badge');

            outputElement.textContent = '// Cargando petición...';

            try {
                const response = await fetch(baseUrl + endpointInput);
                const data = await response.json();

                statusBadge.classList.remove('hidden');
                statusBadge.textContent = `${response.status} ${response.statusText}`;

                if (response.ok) {
                    statusBadge.className = 'text-xs font-mono px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-400 border border-emerald-500/20';
                } else {
                    statusBadge.className = 'text-xs font-mono px-2 py-0.5 rounded bg-rose-500/10 text-rose-400 border border-rose-500/20';
                }

                outputElement.textContent = JSON.stringify(data, null, 2);
            } catch (error) {
                statusBadge.classList.remove('hidden');
                statusBadge.textContent = 'Error de conexión';
                statusBadge.className = 'text-xs font-mono px-2 py-0.5 rounded bg-rose-500/10 text-rose-400 border border-rose-500/20';
                outputElement.textContent = JSON.stringify({
                    error: "No se pudo realizar la petición a la API.",
                    detail: error.message
                }, null, 2);
            }
        }

        function copyToClipboard() {
            const codeText = document.getElementById('json-output').textContent;
            navigator.clipboard.writeText(codeText);
            alert('¡JSON copiado al portapapeles!');
        }

        // Carga inicial automatica
        document.addEventListener('DOMContentLoaded', () => {
            fetchApiData();
        });
    </script>
</body>

</html>
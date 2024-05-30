<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <header class="bg-blue-500 text-white p-4 flex justify-between items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="" class="w-2/12">
                        <div class="flex-1 flex space-x-4 justify-center items-center">
                            <a href="/" class="text-xl font-bold">Inicio</a>
                            <a href="/juegos" class="text-xl">Juegos</a>
                            <a href="/cursos" class="text-xl">Cursos</a>
                            <a href="/tareas" class="text-xl">Tareas</a>
                            <a href="/calificaciones" class="text-xl">Calificaciones</a>
                        </div>
                        <div class="flex space-x-4">
                        @if (Route::has('login'))
                            <livewire:welcome.navigation />
                        @endif
                    </div>
                </header>

                    <main class="p-4">
                        <div class="grid grid-cols-3 gap-4">
                            <div class="bg-gray-200 p-20 rounded-lg">
                                <h2 class="text-xl font-bold">Juego 1</h2>
                                
                            </div>
                            <div class="bg-gray-200 p-20 rounded-lg">
                                <h2 class="text-xl font-bold">Juego 2</h2>
                                
                            </div>
                            <div class="bg-gray-200 p-20 rounded-lg">
                                <h2 class="text-xl font-bold">Juego 3</h2>
                                
                            </div>

                            <div class="bg-gray-200 p-20 rounded-lg">
                                <h2 class="text-xl font-bold">Juego 4</h2>
                                
                            </div>

                            <div class="bg-gray-200 p-20 rounded-lg">
                                <h2 class="text-xl font-bold">Juego 5</h2>
                                
                            </div>

                            <div class="bg-gray-200 p-20 rounded-lg">
                                <h2 class="text-xl font-bold">Juego 6</h2>
                                
                            </div>
                        </div>
                    </main>

                    <footer class="bg-gray-900 text-white py-8">
                        <div class="container mx-auto px-4">
                            <div class="flex justify-between items-center">
                                <!-- Aquí va el contenido existente del footer -->
                                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                                    <div>
                                        <h4 class="text-lg font-bold mb-4">Sobre Nosotros</h4>
                                        <p class="text-sm">Descubre quiénes somos y qué hacemos en Edutech.</p>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold mb-4">Atención al Cliente</h4>
                                        <ul>
                                            <li class="text-sm">Contacto</li>
                                            <li class="text-sm">FAQs</li>
                                            <li class="text-sm">Envíos y Devoluciones</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h4 class="text-lg font-bold mb-4">Legal</h4>
                                        <ul>
                                            <li class="text-sm">Términos y Condiciones</li>
                                            <li class="text-sm">Política de Privacidad</li>
                                            <li class="text-sm">Política de Cookies</li>
                                        </ul>                    
                                    </div>

                                    <div>
                                        <h4 class="text-lg font-bold mb-4">Redes Sociales</h4>
                                        <div class="flex flex-col">
                                        <div class="flex items-center mb-2">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b9/2023_Facebook_icon.svg/1024px-2023_Facebook_icon.svg.png" alt="Facebook" class="h-6 mr-2">
                                            <span class="text-sm">Edutech</span>
                                        </div>
                                        <div class="flex items-center mb-2">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Instagram_icon.png/768px-Instagram_icon.png" alt="Instagram" class="h-6 mr-2">
                                            <span class="text-sm">Edutech</span>
                                        </div>
                                        <div class="flex items-center">
                                            <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Twitter_new_X_logo.png" alt="Twitter" class="h-6 mr-2">
                                            <span class="text-sm">Edutech</span>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin del contenido existente -->

                                <!-- Añadir el logo a la derecha -->
                                <div class="flex items-center">
                                <img src="{{ asset('images/logo.png') }}" alt="" class="w-full">

                                </div>
                            </div>
                        </div>
                    </footer>

                </div>
            </div>
        </div>
    </body>
</html>

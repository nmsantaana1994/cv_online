<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @PwaHead <!-- PWA meta tags directive -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <!-- Bootstrap 5 CSS por CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Font Awasome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    @yield('css')
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#hero">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#sobre-mi">Sobre mí</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#habilidades">Habilidades</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#experiencia">Experiencia</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#proyectos">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contacto">Contacto</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Botón de instalación PWA -->
        <button id="btn-instalar-pwa"
                class="btn btn-success"
                style="display:none; position:fixed; bottom:1rem; right:1rem; z-index:1000;">
            Instalar App
        </button>

        <main class="">
            @yield('content')
        </main>
    </div>

    <!-- jQuery y Bootstrap JS por CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        // let deferredPrompt;

        window.addEventListener('beforeinstallprompt', e => {
            // Evita que Chrome muestre su banner por defecto
            e.preventDefault();
            // Guarda el evento para disparar prompt más tarde
            deferredPrompt = e;
            // Aquí podrías mostrar tu propio botón “Instalar”
            const btn = document.getElementById('btn-instalar-pwa');
            btn.style.display = 'inline-block';
        });

        document.getElementById('btn-instalar-pwa').addEventListener('click', () => {
            if (!deferredPrompt) return;
            // Muestra el prompt de instalación
            deferredPrompt.prompt();
            // Espera la respuesta del usuario
            deferredPrompt.userChoice.then(choice => {
                if (choice.outcome === 'accepted') {
                    console.log('Usuario aceptó la instalación');
                } else {
                    console.log('Usuario rechazó la instalación');
                }
                deferredPrompt = null;
            });
        });

        document.querySelectorAll('a.nav-link[href^="#"]').forEach(link => {
            link.addEventListener('click', e => {
                e.preventDefault();
                document.querySelector(link.getAttribute('href'))
                        .scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>
    @RegisterServiceWorkerScript <!-- Service worker registration -->
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', config('app.name', 'Kevin Espinoza PH'))</title>

    <!-- Estilos -->
    @vite('resources/css/app.css')

    <!-----------------------------------------------------------
-- animate.min.css by Daniel Eden (https://animate.style)
-- is required for the animation of notifications and slide out panels
-- you can ignore this step if you already have this file in your project
--------------------------------------------------------------------------->

<link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
<script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
<script src="//unpkg.com/alpinejs" defer></script>
<link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
<script>
    // On page load or when changing themes, best to add inline in `head` to avoid FOUC
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark');
    } else {
        document.documentElement.classList.remove('dark')
    }
</script>

</head>
<body>
    <!-- Header -->
    <header>
        @if (Route::currentRouteName() !== 'home')
            @include('components.home-banner')
        @else
            @include('components.header')
        @endif
    </header>

    <!-- Contenido principal -->
    <main class="main-content">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        @include('components.footer')
    </footer>

    <!-- Scripts de Flowbite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
</body>
</html>

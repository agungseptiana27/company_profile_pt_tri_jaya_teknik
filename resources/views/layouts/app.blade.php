<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'PT Tri Jaya Teknik Karawang') }}</title>
    @vite('resources/css/app.css') {{-- Tailwind CSS --}}

</head>

<body class="bg-white font-sans">



    {{-- Navbar --}}
    @if (!isset($noNavbar) || $noNavbar !== true)
    @include('partials.navbar')
    @endif

    {{-- Main Content --}}
    <main class="pt-20">
        @yield('content')
    </main>

    {{-- Footer --}}
    @include('partials.footer')

    <script>
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('mobile-menu').classList.toggle('hidden');
    });
    </script>
    <script src="//unpkg.com/alpinejs" defer></script>

</body>

</html>
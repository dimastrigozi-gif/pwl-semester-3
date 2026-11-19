<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'ArenaHub')</title>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen bg-gray-900 text-white">
    <header class="sticky top-0 z-40 border-b border-gray-700 bg-gray-900">
        <div class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4">
            <a href="{{ route('home') }}" class="text-xl font-extrabold tracking-tight">
                Arena<span class="text-cyan-500">Hub</span>
            </a>

            <nav class="hidden items-center gap-6 text-sm md:flex">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'text-cyan-400' : 'text-gray-300 hover:text-white' }}">Home</a>
                <a href="{{ route('cari-turnamen') }}" class="{{ request()->routeIs('cari-turnamen') ? 'text-cyan-400' : 'text-gray-300 hover:text-white' }}">Cari Turnamen</a>
                <a href="{{ route('tentang') }}" class="{{ request()->routeIs('tentang') ? 'text-cyan-400' : 'text-gray-300 hover:text-white' }}">Tentang</a>
            </nav>

            <div class="hidden items-center gap-3 text-sm md:flex">
                @if(session('user'))
                    <span class="text-gray-400">{{ session('user')['name'] }}</span>

                    @if(session('user')['role'] === 'organizer')
                        <a href="{{ route('organizer.dashboard') }}" class="text-cyan-400 hover:underline">Dashboard</a>
                    @else
                        <a href="{{ route('profil') }}" class="text-gray-300 hover:text-white">Profil</a>
                    @endif

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-400 hover:text-white">Logout</button>
                    </form>
                @else
                    <a href="{{ route('signin') }}" class="text-gray-300 hover:text-white">Sign In</a>
                    <a href="{{ route('signup') }}" class="bg-cyan-600 text-white px-4 py-2 rounded-md hover:bg-cyan-700">Sign Up</a>
                @endif
            </div>
        </div>

        <div class="border-t border-gray-800 px-4 py-2 md:hidden">
            <nav class="flex flex-wrap items-center gap-4 text-sm">
                <a href="{{ route('home') }}" class="text-gray-300">Home</a>
                <a href="{{ route('cari-turnamen') }}" class="text-gray-300">Cari Turnamen</a>
                <a href="{{ route('tentang') }}" class="text-gray-300">Tentang</a>

                @if(session('user'))
                    <a href="{{ route('profil') }}" class="text-gray-300">Profil</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-400">Logout</button>
                    </form>
                @else
                    <a href="{{ route('signin') }}" class="text-gray-300">Sign In</a>
                    <a href="{{ route('signup') }}" class="text-cyan-400">Sign Up</a>
                @endif
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="mt-10 border-t border-gray-700 px-4 py-8">
        <div class="mx-auto max-w-6xl text-center text-sm text-gray-500">
            ArenaHub - Platform Turnamen Esport &copy; 2026
        </div>
    </footer>
</body>
</html>

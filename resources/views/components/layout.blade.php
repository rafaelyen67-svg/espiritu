@props(['title' => config('app.name', 'Laravel')])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Shared Glow & Animation utilities */
        .glow-sky {
            text-shadow: 0 0 15px rgba(56, 189, 248, 0.5);
        }
    </style>
</head>
<body class="bg-slate-950 text-slate-100 min-h-screen font-sans antialiased flex flex-col justify-between">

    <!-- Global Header & Navigation -->
    <header class="w-full max-w-6xl mx-auto px-6 py-6 flex items-center justify-between border-b border-slate-800/80">
        <a href="/" class="text-xl font-bold tracking-wider text-sky-400 hover:text-sky-300 transition">
            {{ config('app.name', 'Laravel App') }}
        </a>
        <nav class="space-x-6 text-sm font-medium">
            <a href="/" class="{{ request()->is('/') ? 'text-sky-400 font-semibold border-b-2 border-sky-400 pb-1' : 'text-slate-400 hover:text-white transition' }}">
                Home
            </a>
            <a href="/about" class="{{ request()->is('about') ? 'text-sky-400 font-semibold border-b-2 border-sky-400 pb-1' : 'text-slate-400 hover:text-white transition' }}">
                About
            </a>
            <a href="/contact" class="{{ request()->is('contact') ? 'text-sky-400 font-semibold border-b-2 border-sky-400 pb-1' : 'text-slate-400 hover:text-white transition' }}">
                Contact
            </a>
        </nav>
    </header>

    <!-- Page Content ($slot) -->
    <main class="w-full max-w-6xl mx-auto px-6 py-12 flex-1 flex flex-col justify-center">
        {{ $slot }}
    </main>

    <!-- Global Footer -->
    <footer class="w-full max-w-6xl mx-auto px-6 py-6 text-center text-xs text-slate-500 border-t border-slate-800/60">
        &copy; {{ date('Y') }} {{ config('app.name', 'Laravel App') }}. All rights reserved.
    </footer>

</body>
</html>
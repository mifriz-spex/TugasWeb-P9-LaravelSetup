<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tugas Rutin 9')</title>
    <!-- Bonus: Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-slate-800 border-b border-slate-700 py-4">
        <div class="max-w-4xl mx-auto px-4 flex justify-between items-center">
            <a href="{{ route('home') }}" class="text-xl font-bold text-pink-500">TugasWeb P9</a>
            <div class="space-x-4">
                <a href="{{ route('home') }}" class="hover:text-pink-400 transition">Home</a>
                <a href="{{ route('about') }}" class="hover:text-pink-400 transition">About</a>
                <a href="{{ route('contact') }}" class="hover:text-pink-400 transition">Contact</a>
                <a href="{{ url('/hello/Miftah') }}" class="bg-pink-600 hover:bg-pink-700 text-white px-3 py-1 rounded-md text-sm transition">Demo /hello/Nama</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow max-w-4xl mx-auto w-full px-4 py-8">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-800 text-slate-400 py-4 text-center text-sm border-t border-slate-700">
        &copy; {{ date('Y') }} Tugas Rutin 9 — Setup Laravel
    </footer>

</body>
</html>
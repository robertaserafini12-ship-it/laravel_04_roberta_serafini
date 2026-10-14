<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Blog Cinema' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <x-navbar />

    <main class="min-vh-100 py-5">
        {{ $slot }}
    </main>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">&copy; {{ date('Y') }} Blog Cinema - Tutti i diritti riservati.</p>
    </footer>

</body>
</html>
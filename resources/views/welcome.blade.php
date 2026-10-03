<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimalBlog - Home</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-light">
    <x-navbar />

    <header class="container text-center my-5 py-5">
        <h1 class="display-3 fw-bold text-success">Benvenuti su AnimalBlog! 🐶🐱🐼</h1>
        <p class="lead text-muted mt-3">Il luogo perfetto per scoprire curiosità, storie e segreti sul fantastico mondo degli animali.</p>
        <a href="{{ route('articles.index') }}" class="btn btn-success btn-lg mt-4 shadow">Esplora gli Articoli</a>
    </header>
</body>
</html>
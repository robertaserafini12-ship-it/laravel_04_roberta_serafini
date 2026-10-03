<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article['title'] }}</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <x-navbar />

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="card shadow p-4">
                    <h1 class="mb-3">{{ $article['title'] }}</h1>
                    <hr>
                    <p class="fs-5 mt-3">{{ $article['content'] }}</p>
                    <div class="mt-4">
                        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Torna agli articoli</a>
                    </div>
                </article>
            </div>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutti gli Articoli</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <x-navbar />

    <div class="container my-5">
        <h2 class="mb-4">Lista degli Articoli</h2>
        <div class="row">
            @foreach($articles as $article)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{ $article['title'] }}</h5>
                            <p class="card-text text-truncate">{{ $article['content'] }}</p>
                            <a href="{{ route('articles.show', ['id' => $article['id']]) }}" class="btn btn-outline-primary btn-sm">Leggi di più</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
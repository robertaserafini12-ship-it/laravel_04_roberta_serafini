<x-layout>
    <h1 class="mb-4">Tutti gli articoli</h1>
    <div class="row">
        @foreach($articles as $article)
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article['title'] }}</h5>
                        <p class="card-text">{{ $article['content'] }}</p>
                        <a href="{{ route('articles.show', ['id' => $article['id']]) }}" class="btn btn-primary btn-sm">Dettaglio</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-layout>
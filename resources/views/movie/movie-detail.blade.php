<x-layout :title="$movie['title']">
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="{{ $movie['img'] }}" class="img-fluid rounded shadow" alt="{{ $movie['title'] }}">
            </div>
            <div class="col-md-6">
                <h1 class="display-5">{{ $movie['title'] }}</h1>
                <h4 class="text-muted">Regia: {{ $movie['director'] }}</h4>
                <p><strong>Anno:</strong> {{ $movie['year'] }}</p>
                <p><strong>Genere:</strong> {{ $movie['genre'] }}</p>
                <hr>
                <h5>Trama:</h5>
              <a href="{{ route('movie.index') }}" class="btn btn-outline-secondary mt-3">← Torna all'elenco</a>
            </div>
        </div>
    </div>
</x-layout>
@props(['movie'])

<div class="card h-100 shadow-sm border-0">
    <img src="{{ $movie['img'] }}" class="card-img-top" alt="{{ $movie['title'] }}">

    <div class="card-body d-flex flex-column">
        <h5 class="card-title fw-bold">{{ $movie['title'] }}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{ $movie['director'] }} ({{ $movie['year'] }})</h6>
        
         <a href="{{ route('movie.show', ['id' => $movie['id']]) }}" class="btn btn-danger mt-auto">Leggi di più</a>
    </div>
</div>
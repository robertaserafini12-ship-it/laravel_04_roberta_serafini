<x-layout title="Tutti i Film - Cinema Blog">
    <div class="container my-5">
        <h1 class="text-center mb-4 text-danger fw-bold">Tutti i Film</h1>
        <div class="row">
            @foreach($movies as $movie)
                <div class="col-md-3 mb-4">
                    <x-card :movie="$movie" />
                
                </div>
            @endforeach
        </div>
    </div>
</x-layout>
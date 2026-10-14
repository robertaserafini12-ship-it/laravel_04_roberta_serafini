<x-layout title="Homepage - Cinema Blog">
    <div class="bg-danger text-white py-5 my-0 rounded-3 shadow">
        <div class="container text-center py-4">
            <h1 class="display-3 fw-bold">Benvenuto nel Blog del Cinema</h1>
            <p class="lead mt-3">Scopri le nostre recensioni, notizie ed approfondimenti sui migliori film del momento.</p>
            <a href="{{ route('movie.index') }}" class="btn btn-dark btn-lg mt-4 px-4 py-2 shadow">Esplora i Film</a>
        </div>
    </div>
</x-layout>
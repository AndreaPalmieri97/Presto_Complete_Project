<x-layout>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-6 text-center ">
                <h1 class="mb-5">DETTAGLIO ANNUNCIO </h1>
                <img class="img-custom img-fluid" src="{{ Storage::url($article->img) }}">
            </div>
            <div class="col-12 col-md-6 text-center">
                <h2>{{ $article->name }}</h2>
                <p class="fs-4">Informazioni sul prodotto:<br>{{ $article->description }}</p>
                <h4>Prezzo: {{ $article->price }} € </h4>
            </div>
        </div>
    </div>


</x-layout>

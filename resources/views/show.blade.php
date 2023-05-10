<x-layout>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-6 text-center">
                <H1>DETTAGLIO ANNUNCIO </H1>
                <img class="img-custom" src="{{ Storage::url($article->img) }}">
            </div>
            <div class="col-6 ">
                <h2>{{ $article->name }}</h2>
                <p class="fs-4">Informazioni sul prodotto:<br>{{ $article->description }}</p>
                <h4>Prezzo: {{ $article->price }} € </h4>
            </div>
        </div>
    </div>


</x-layout>

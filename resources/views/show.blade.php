<x-layout>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 text-center ">
                <h1 class="mb-5">DETTAGLIO ANNUNCIO </h1>
                <h2>{{ $article->name }}</h2>
                <p class="fs-4">Informazioni sul prodotto:<br>{{ $article->description }}</p>
                <h4>Prezzo: {{ $article->price }} € </h4>
            </div>
        </div>
        <div class="col-12 text-center mt-5">
            <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                @if (count($article->images))
                    <div class="carousel-inner">
                        @foreach ($article->images as $image)
                            <div class="carousel-item text-center @if ($loop->first) active @endif">
                                <img src="{{ Storage::url($image->path) }}" class="img-custom rounded shadow-lg">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next " type="button" data-bs-target="#showCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                @endif
            </div>
        </div>
    </div>



</x-layout>

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
        <div class="col-12 text-center mt-5 d-flex justify-content-center">
            <div id="showCarousel" class="carousel slide w-50" data-bs-ride="carousel">
                @if (count($article->images))
                    <hr class="a-divider-normal mb-5">
                    <div class="carousel-inner">
                        @foreach ($article->images as $image)
                            <div class="carousel-item text-center @if ($loop->first) active @endif">
                                @if (count($article->images))
                                    <img src="{{ $image->getUrl(400, 300) }}" class="mb-4 img-fluid rounded">
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <hr class="a-divider-normal mt-5">
                    <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                        data-bs-slide="prev">
                        <i class="fa-sharp fa-solid fa-arrow-left fa-2xl arrow"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                        data-bs-slide="next">
                        <i class="fa-sharp fa-solid fa-arrow-right fa-2xl arrow"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                @endif
            </div>
        </div>
    </div>
</x-layout>

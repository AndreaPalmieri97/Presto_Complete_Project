<x-layout>
    @if (session('revisorMessage'))
        <div class="alert alert-success alert-dismissible fade show mx-5 text-center my-3 fs-4 shadow-lg" role="alert">
            {{ session('revisorMessage') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <h1 class="mb-5 ms-5">
                    {{ $article_to_check ? 'Ecco l\'annuncio da revisionare :' : 'Non ci sono annunci da revisionare' }}
                </h1>
            </div>
        </div>
    </div>
    @if ($article_to_check)
        <hr class="a-divider-normal">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 mt-5">
                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                        @if ($article_to_check->images)
                            <div class="carousel-inner">
                                @foreach ($article_to_check->images as $image)
                                    <div
                                        class="carousel-item text-center @if ($loop->first) active @endif">
                                        @if (count($article_to_check->images))
                                            <img src="{{ $image->getUrl(400, 300) }}"
                                                class="mb-4 img-fluid rounded">
                                        @endif
                                        <div class="row text-center">
                                            <div class="col-6 text-center mt-5">
                                                <h5 class="tc-accent">Revisione Immagine</h5>
                                                <div>
                                                    <p>Adulti: <span class="{{ $image->adult }}"></span></p>
                                                    <p>Satira: <span class="{{ $image->spoof }}"></span></p>
                                                    <p>Medicina: <span class="{{ $image->medical }}"></span></p>
                                                    <p>Violenza: <span class="{{ $image->violence }}"></span></p>
                                                    <p>Contenuto Ammiccante: <span class="{{ $image->racy }}"></span>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mt-5">Tags:</h5>
                                                @if ($image->labels)
                                                    @foreach ($image->labels as $label)
                                                        <p class="d-inline">{{ $label }}</p>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
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
                <div
                    class="col-10 col-sm-7 col-md-5 col-lg-3 shadow-lg bg-desc mx-auto my-auto mt-5 text-center">
                    <h3 class="fw-bold mt-5">Titolo: {{ $article_to_check->name }}</h3>
                    <h3 class="fw-bold my-5">Descrizione: {{ $article_to_check->description }}</h3>
                    <h3 class="fw-bold mb-5">Prezzo: {{ $article_to_check->price }}€</h3>
                </div>
            </div>
        </div>
        <hr class="a-divider-normal">
        <div class="d-flex justify-content-evenly buttons-wrapper">
            <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="ms-5 bg-success btn-lg btn fw-bold text-white RejAcc" type="submit">Accetta</BUtton>
            </form>
            <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="ms-5 bg-danger btn-lg btn fw-bold text-white RejAcc" type="submit">Rifiuta</BUtton>
            </form>
        </div>
    @endif
</x-layout>

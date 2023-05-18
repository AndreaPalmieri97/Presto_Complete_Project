<x-layout>

    @if (session('revisorMessage'))
        <div class="alert alert-danger alert-dismissible fade show mx-5 text-center my-3 fs-4 shadow-lg" role="alert">
            {{ session('revisorMessage') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-6">
                <h1 class="mb-5 ms-5">
                    {{ $article_to_check ? 'Ecco l\'annuncio da revisionare :' : 'Non ci sono annunci da revisionare' }}
                </h1>
            </div>
        </div>
    </div>
    @if ($article_to_check)
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-6 mt-5">
                    <div id="showCarousel" class="carousel slide" data-bs-ride="carousel">
                        @if ($article_to_check->images)
                            <div class="carousel-inner">
                                @foreach ($article_to_check->images as $image)
                                    <div
                                        class="carousel-item text-center @if ($loop->first) active @endif">
                                        <img src="{{ Storage::url($image->path) }}" class="img-custom rounded">
                                    </div>
                                @endforeach
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#showCarousel"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#showCarousel"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        @endif
                    </div>
                </div>
                <div class="col-12 col-md-6 text-center mt-5 bg-form1">
                    <h3 class="fw-bold mb-5">Titolo: {{ $article_to_check->name }}</h3>
                    <h3 class="fw-bold mb-5">Descrizione: {{ $article_to_check->description }}</h3>
                    <h3 class="fw-bold mb-5">Prezzo: {{ $article_to_check->price }}</h3>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-evenly buttons-wrapper">
            <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="ms-5 bg-success btn-lg btn fw-bold text-white " type="submit">Accetta</BUtton>
            </form>
            <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="ms-5 bg-danger btn-lg btn fw-bold text-white" type="submit">Rifiuta</BUtton>
            </form>
        </div>
    @endif
</x-layout>

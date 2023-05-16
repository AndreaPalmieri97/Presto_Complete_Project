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
                    {{ $article_to_check ?'Ecco l\'annuncio da revisionare :' : 'Non ci sono annunci da revisionare' }}
                </h1>
                @if ($article_to_check)
                    <h3 class="fw-bold mb-5 ms-5">Titolo: {{ $article_to_check->name }}</h3>
                    <div class="d-flex justify-content-evenly buttons-wrapper">
                        <form class="r"
                            action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="ms-5 bg-success btn-lg btn fw-bold text-white "
                                type="submit">Accetta</BUtton>
                        </form>
                        <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}"
                            method="POST">
                            @csrf
                            @method('PATCH')
                            <button class="ms-5 bg-danger btn-lg btn fw-bold text-white" type="submit">Rifiuta</BUtton>
                        </form>
                    </div>
            </div>
            <div class="col-6 img-fluid">
                <img src="{{ Storage::url($article_to_check->img) }}" class="img-fluid">
            </div>
            @endif
        </div>
    </div>
</x-layout>

<x-layout>

    @if (session('message'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>       
    @endif

    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-12 mt-5 text-center">
                <h1>GRAZIE PER L'ANNUNCIO INSERITO!</h1>
                <p class="h4 mt-5">Sarà presto inserito entro 2 giorni lavorativi</p>
                <br>
                <p class="h4 my-5">(Controllare la casella spam)</p>
                <a class="fs-5" href="/" rel="noopener noreferrer">Torna alla home</a>
            </div>
        </div>
    </div>

</x-layout>





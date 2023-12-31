<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="d-flex justify-content-evenly col-6">
                {{-- <h1>Annunci filtrati per: <h1 class="text-danger"> {{ $categoryName }} </h1> </h1> --}}
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            @forelse($articles as $article)
                <div class="d-flex justify-content-center col-12 col-sm-6 col-md-4 col-lg-4 ">
                    <x-card-annunci :article="$article" />
                </div>
            @empty
                <h2 class=" my-5 d-flex justify-content-center align-items-center">Non ci sono annunci per questa ricerca</h2>
            @endforelse
        </div>
    </div>

</x-layout>

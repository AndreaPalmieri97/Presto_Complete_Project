<x-layout>
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-evenly col-6">
                <h1>Annunci filtrati per: <h1 class="text-danger"> {{ $categoryName }} </h1> </h1>
            </div>
            @forelse($article as $article)
                <x-card-annunci :article="$article" />
            @empty
                <h2>Non ci sono annunci per questa categoria</h2>
            @endforelse
        </div>
    </div>
</x-layout>

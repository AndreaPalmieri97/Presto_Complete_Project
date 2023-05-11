<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1>Annunci filtrati per: {{ $categoryName }}</h1>
            </div>
            @forelse($article as $article)
                <x-card-annunci :article="$article" />
            @empty
                <h2>Non ci sono annunci per questa categoria</h2>
            @endforelse
        </div>
    </div>
</x-layout>

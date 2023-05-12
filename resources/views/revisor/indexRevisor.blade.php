<x-layout>

    <h1>{{ $article_to_check ? 'Ecco l\'annuncio da revisionare' : 'Non ci sono annunci da revisionare' }}</h1>

    @if ($article_to_check)

        <h4>Titolo: {{ $article_to_check->name }}</h4>
        <img src="{{ Storage::url($article_to_check->img) }}" alt="">

        <form action="{{ route('revisor.accept_article', ['article' => $article_to_check]) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit">Accetta</BUtton>
        </form>

        <form action="{{ route('revisor.reject_article', ['article' => $article_to_check]) }}" method="POST">
            @csrf
            @method('PATCH')
            <button type="submit">Rifiuta</BUtton>
        </form>
    @endif
</x-layout>

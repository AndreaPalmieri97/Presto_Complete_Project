<x-layout>

    @foreach ($article as $article)
    <x-card-annunci 
    :article="$article"
    />
    @endforeach


</x-layout>
<div class="card img-fluid card-custom" style="width: 25rem">
    <div class="card-body text-center img-fluid">
        <h4 class="card-title text-center">{{ $article->name }}</h4>
        <h6> {!! $article->category->name !!}</h6>
        <img src="{{ Storage::url($article->img) }}" class="img-fluid img-alt">
        <h5 class="text-center my-3">Descrizione: {!! $article->description !!}</h5>
        <h5 class="fs-4"> {!! $article->price !!} €</h5>
        <a href="{{ route('show-details-article', $article) }}"><button class="myButton my-3">Dettaglio</button></a>
    </div>
</div>

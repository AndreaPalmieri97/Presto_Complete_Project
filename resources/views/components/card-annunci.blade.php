<div class="card img-fluid card-custom" style="width: 25rem">
    <div class="card-body text-center img-fluid">
        @if (count($article->images))
            <img src="{{$article->images()->first()->getUrl(400,300) }}" class="mb-4 img-fluid rounded">
        @endif
        <h4 class="card-title text-center fw-bold">{{ $article->name }}</h4>
        <h5> {!! $article->category->name !!}</h5>
        <h5 class="text-center my-3">Descrizione: {!! $article->description !!}</h5>
        <h5 class="fs-4"> {!! $article->price !!} €</h5>
        <h6 class="fw-lighter mt-3">Aggiunto da: {!! $article->user->name !!}</h6>
        <a href="{{ route('show-details-article', $article) }}"><button class="myButton my-3">Dettaglio</button></a>
    </div>
</div>

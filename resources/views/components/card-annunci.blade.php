<div class="card img-fluid card-custom" style="width: 25rem">
    <div class="card-body">
        <h4 class="card-title text-center">{{ $article->name }}</h4>
        <h6> {!! $article->description !!}</h6>
        <h6> {!! $article->price !!}</h6>
        <h6> {!! $article->category->name !!}</h6>
        <img src="{{ Storage::url($article->img)}}" class="card-img-top" alt="...">
    </div>
</div>
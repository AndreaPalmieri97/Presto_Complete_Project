<x-layout>

    <x-image-header />

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-12 col-md-4">
                    <div class="card img-fluid card-custom" style="width: 25rem">
                        <img class="img-custom" src="./img/{{ $category->img }}" alt="" class="card-img-top">
                        <div class="card-body">
                            <h4 class="card-title text-center mb-3">{{ $category->name }}</h4>
                            <h6 class="text-center mb-3"> {!! $category->description !!}</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <a class="btn myButton" href="{{ route('show.category', $categorie->id) }}" role="button">Scopri di
                                    più</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>




</x-layout>

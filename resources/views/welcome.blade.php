<x-layout>

    <x-image-header />

    <div class="container-fluid">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-12 d-flex justify-content-center col-sm-6 col-lg-3">
                    <div class="card img-fluid card-custom" style="width: 25rem">
                        <div class="card-body">
                            <img class="img-custom img-fluid" src="./img/{{ $category->img }}" ìì class="card-img-top">
                            <h4 class="card-title text-center mb-3">{{ $category->name }}</h4>
                            <h6 class="text-center mb-3"> {!! $category->description !!}</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <a class="btn myButton" href="{{ route('show.category', $category->id) }}" role="button">Scopri di più</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>




</x-layout>

<x-layout>
    @if (session('access.denied'))
        <div class="alert alert-success fade show mx-5 text-center my-3 fs-4 shadow-lg" role="alert">
            {{ session('access.denied') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('acceptRevisor'))
        <div class="alert alert-success fade show mx-5 text-center my-3 fs-4 shadow-lg" role="alert">
            {{ session('acceptRevisor') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    @if (session('success'))
        <div class="alert alert-success fade show mx-5 text-center my-3 fs-4 shadow-lg" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <x-image-header />
    <div class="container-fluid">
        <div class="row">
            @foreach ($categories as $category)
                <div class="col-12 col-sm-10 col-md-6 col-xl-3 d-flex justify-content-center">
                    <div class="card img-fluid card-custom" style="width: 25rem">
                        <div class="card-body">
                            <img class="img-welcome img-fluid" src="./img/{{ $category->img }}" ìì class="card-img-top">
                            <h4 class="card-title text-center mb-3">{{ $category->name }}</h4>
                            <h6 class="text-center mb-3"> {!! $category->description !!}</h6>
                            <div class="d-flex justify-content-center align-items-center">
                                <a class="btn myButton" href="{{ route('show.category', $category->id) }}"
                                    role="button">Scopri di più</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



</x-layout>

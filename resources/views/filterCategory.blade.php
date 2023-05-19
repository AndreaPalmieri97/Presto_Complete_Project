<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6 mx-auto text-center mt-5">
                <h1>{{ __('ui.filtroannunci') }} <h1 class="text-danger"> {{ $categoryName }} </h1>
                </h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @forelse($article as $article)
                <div class="d-flex justify-content-center col-12 col-sm-6 col-md-4 col-lg-3 ">
                    <x-card-annunci :article="$article" />
                </div>
            @empty
                <h2>Non ci sono annunci per questa categoria</h2>
            @endforelse
        </div>
    </div>

</x-layout>

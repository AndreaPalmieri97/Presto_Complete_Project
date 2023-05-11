<x-layout>
    <div class="container-fluid">
        <div class='row'>
            <div class="col-12">
                <h1 class="my-5 text-center">Lista annunci inseriti</h1>
            </div>
        </div>
    </div>


    <div class="container-fluid my-5">
        <div class='row'>
            @foreach ($article as $article)
                <div class="d-flex justify-content-center col-12 col-md-6 col-lg-3">
                    <x-card-annunci :article="$article" />
                </div>
            @endforeach
        </div>
    </div>



</x-layout>

<x-layout>

    <x-image-header />

    <div class="container">
        <div class="row">
            @foreach ($category as $element)
                <div class="col-12 col-md-4">
                    <x-card categoryCategory="{{ $element['categoria'] }}" categoryImg="{{ $element['img'] }}"
                        categoryDescription="{{ $element['description'] }}" />
                </div>
            @endforeach

        </div>
    </div>
    </div>




</x-layout>

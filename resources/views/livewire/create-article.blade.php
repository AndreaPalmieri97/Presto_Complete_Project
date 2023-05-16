<div>
    <div class="col-12 col-md-7 mt-3 text-center">
        <h1 class="my-5 mx-5">{{ __('ui.newArticle') }}</h1>
        <p class="h6 mt-4">Qualsiasi dato verrà acquisito rispettando la privacy come dall'Art n 123.</p>
        <p class="h6 mt-4">Usufruendo dei servizi offerti da Presto.it accetterai i termini e le condizioni del nostro
            sito.</p>
    </div>
    <div class="col-12 col-md-4">
        <form class="my-5" wire:submit.prevent="store">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label fs-5 fw-bold">Nome</label>
                <input id="name" type="text" class="form-control" wire:model="name">
            </div>
            <label for="category" class="form-label mb-3 fs-5 fw-bold">Categoria</label>
            <select selected id="category" wire:model="category" class="form-select mb-3"
                aria-label="Default select example">
                <option value="">Scegli la categoria</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <div class="mb-3">
                <label for="description" class="form-label fs-5 fw-bold">Descrizione</label>
                <textarea id="description" type="text" class="form-control" wire:model="description"> </textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label fs-5 fw-bold">Prezzo</label>
                <input id="price" type="number" class="form-control" wire:model="price">
            </div>
            <div class="mb-3">
                <label for="img" multiple class="form-label fs-5 fw-bold">Image</label>
                <input wire:model="temporary_images" type="file" class="shadow form-control" name="img">
            </div>
            @if (!empty($imgages))
                <div class="row">
                    <div class="col-12">
                        <p>Anteprima immagine</p>
                        <div class="row rounded shadow py-4">
                            @foreach ($images as $key => $image)
                                <div class="col-3">
                                    <div class="img-preview" style="background-image:url({{ $image->temporaryUrl() }})"></div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
            <button type="submit" class="btn myButton">Inserisci</button>
        </form>
    </div>
</div>

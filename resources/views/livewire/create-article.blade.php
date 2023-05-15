<div>
    <div class="col-12 col-md-7 mt-3 text-center">
        <h1 class="my-5 mx-5">INSERISCI L'ARTICOLO</h1>
        <p class="h6 mt-4">Qualsiasi dato verrà acquisito rispettando la privacy come dall'Art n 123...</p>
    </div>
    <div class="col-12 col-md-4">
        <form class="my-5" wire:submit.prevent='store'>
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" wire:model="name">
            </div>
            {{-- <div class="mb-3">
                <label for="img" class="form-label">Image</label>
                <input type="file" class="form-control" name="img">
            </div> --}}
            <label for="category" class="form-label fs-5 mb-3">Tipologia</label>
            <select id="category" wire:model="category" class="form-select mb-3" aria-label="Default select example">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <textarea type="text" class="form-control" wire:model="description"> </textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" wire:model="price">
            </div>
            <button type="submit" class="btn myButton">Inserisci</button>
        </form>
    </div>
</div>
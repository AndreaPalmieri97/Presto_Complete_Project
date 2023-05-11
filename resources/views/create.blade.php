<x-layout>

    <h1 class="my-5 mx-5">INSERISCI L'ARTICOLO</h1>

    <form class="my-5" method="post" action="{{route('store-article')}}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" name="name">
        </div>
        <div class="mb-3">
            <label for="img" class="form-label">Image</label>
            <input type="file" class="form-control" name="img">
        </div>
        <label for="category" class="form-label fs-5 mb-3">Tipologia</label>
        <select class="form-select mb-3" name="category_id" aria-label="Default select example">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>         
            @endforeach
        </select>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" name="description"> </textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" class="form-control" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

</x-layout>
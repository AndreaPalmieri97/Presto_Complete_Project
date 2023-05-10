<x-layout>

    <form class="my-5" method="post" action="{{route('store-article')}}">
        @csrf
        <div class="mb-3">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" name="name">
        </div>
        <label for="category" class="form-label fs-5 mb-3">Tipologia</label>
        <select class="form-select mb-3" name="category" aria-label="Default select example">
            <option selected>Seleziona</option>
            <option value="1">Auricolari/Cuffie</option>
            <option value="2">Computer mobili e fissi</option>
            <option value="3">Cellulari</option>
            <option value="3">Console</option>
            <option value="3">Stampanti</option>
            <option value="3">Componenti per setup pc</option>
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
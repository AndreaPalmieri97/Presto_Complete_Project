<div class="card img-fluid card-custom" style="width: 25rem">
    <img class="img-custom" src="./img/{{ $categoryImg }}" alt="" class="card-img-top">
    <div class="card-body">
        <h4 class="card-title text-center mb-3">{{ $categories->name }}</h4>
        <h6 class="text-center mb-3"> {!! $categoryDescription !!}</h6>
        <div class="d-flex justify-content-center align-items-center">
        <button class="myButton">Scopri di più</button>
    </div>
    </div>
</div>

<x-layout>
    <div class="container-fluid my-5">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card bg-form shadow-lg p-5">
                    <div class="card-header text-danger fw-bold text-center">Diventa un revisore</div>
                    <div class="card-body d-flex">
                        <div class="col-6 mt-3 fw-bold">
                            @if (!Auth::user()->is_revisor)
                                <form method="POST" action="{{ route('become.revisor.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nome completo</label>
                                        <div class="col-md-10 mt-3">
                                            <input id="name" type="text" class="form-control" name="name" value="{{Auth::user()->name}}" >
                                        </div>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="email" class="col-md-4">Indirizzo
                                            email</label>
                                        <div class="col-md-10 mt-3">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror"
                                                name="email" value="{{Auth::user()->email}}" >
                                        </div>
                                    </div>
                                    <div class="text-center mt-5">
                                        <button class="btn myButton" type="submit">Invia Richiesta</button>
                                    </div>
                                </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

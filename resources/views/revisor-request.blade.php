<x-layout>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-10 col-sm-8 col-md-10 col-lg-8 col-xxl-5 mx-auto text-center border-reg bg-form">
                    <div class="card-header fw-bold fs-4 color-reg">Diventa un revisore</div>
                    <div class="card-body mx-auto">
                        @if (!Auth::user()->is_revisor)
                            <div class="col-10 mt-3 mx-auto fw-bold">
                                <form class="text-center mx-auto" method="POST" action="{{ route('become.revisor.store') }}">
                                    @csrf
                                    <div class="form-group">
                                        <label for="name">Nome completo</label>
                                        <div class="col-12 col-sm-7 col-md-8 col-lg-10 mx-auto mt-3">
                                            <input readonly="readonly" id="name" type="text" class=" form-control" name="name"
                                                value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group mt-4">
                                        <label for="email">Indirizzo
                                            email</label>
                                        <div class="col-8 col-sm-7 col-md-8 col-lg-10 mt-3 mx-auto">
                                            <input readonly="readonly" id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ Auth::user()->email }}">
                                        </div>
                                    </div>
                                    <div class="form-group my-4">
                                        <label for="tellMeWhy">Parlaci di te</label>
                                        <div class="col-12 col-sm-7 col-md-8 col-lg-10 mt-3 mx-auto">                                        
                                            <textarea id="tellMeWhy" class="border-mobile form-control" onfocus="this.value=''" type="text" name="tellMeWhy" rows="5" cols="40">Ciao sono Mario e vorrei diventare revisore perchè...</textarea>
                                        </div>
                                    </div>
                                    <div class="text-center mt-5">
                                        <button class="btn myButton" type="submit">Invia Richiesta</button>
                                    </div>
                                </form>
                            </div>
                        @endif
                    </div>
                
            </div>
        </div>
    </div>
</x-layout>

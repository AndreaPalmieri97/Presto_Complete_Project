<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 col-8 text-center bg-form shadow-lg">
                <h1 class="m-5 text-center">{{__('ui.registratiora')}}</h1>
                <form class="my-5" method="POST" action="{{ 'register' }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label fs-5 fw-bold">{{__('ui.email')}}</label>
                        <input type="email" class="form-control" name="email">
                        <div id="emailHelp" class="form-text">Non condivideremo mai i tuoi dati.</div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label fs-5 fw-bold">{{__('ui.nome')}}</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label fs-5 fw-bold">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label fs-5 fw-bold">{{__('ui.confpass')}}</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn myButton my-4">{{__('ui.registrati')}}</button><br>
                    <a class="ms-2" href="{{ route('login') }}">Sei già registrato? Accedi qui</a>
                </form>
            </div>
        </div>
    </div>


</x-layout>

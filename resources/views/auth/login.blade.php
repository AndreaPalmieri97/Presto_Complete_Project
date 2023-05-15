<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center bg-form shadow-lg">
                <h1 class="my-3">ACCEDI</h1>
                <form class="rounded" method="POST" action="{{ 'login' }}">
                    @csrf
                    <div class="col-12 mb-3">
                        <label for="email" class="form-label fs-5 fw-bold">Indirizzo Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3 col-12">
                        <label for="password" class="form-label fs-5 fw-bold">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn myButton my-3">Accedi</button><br>
                    <a class="ms-2" href="{{ route('register') }}">Non sei ancora registrato? Cosa aspetti!</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>

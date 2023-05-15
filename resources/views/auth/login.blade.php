<x-layout>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center bg-form shadow-lg">
                <h1 class="my-3">ACCEDI</h1>
                <form class="rounded" method="POST" action="{{ 'login' }}">
                    @csrf
                    <div class="col-12 mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3 col-12">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn myButton my-3">Accedi</button>
                    <p>Non sei ancora registrato? Cosa aspetti!</p>
                    <a class="btn myButton mb-5" href="{{ route('register') }}" role="button">Registrati</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>

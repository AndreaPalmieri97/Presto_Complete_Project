<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 col-8 text-center bg-form shadow-lg">
                <h1 class="m-5 text-center">Registrati ora!</h1>
                <form class="my-5" method="POST" action="{{ 'register' }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Password Confimation</label>
                        <input type="password" class="form-control" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn myButton mb-2">Registrati</button><br>
                    <p>Sei già registrato?</p>
                    <a class="btn myButton ms-2" href="{{ route('login') }}" role="button">Accedi</a>

                </form>
            </div>
        </div>
    </div>


</x-layout>

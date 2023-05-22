<x-layout>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="card col-10 col-sm-8 col-md-8 col-lg-8 col-xxl-5 py-5 mx-auto text-center bg-form border-reg">
                <div class="card-header color-reg fw-bold fs-3 mt-3">{{ __('ui.registratiora') }}</div>
                <form class="my-5" method="POST" action="{{ 'register' }}">
                    @csrf
                    <div class=" col-8 col-sm-7 col-md-7 col-lg-7 mb-3 mx-auto">
                        <label for="email" class="form-label fs-5 fw-bold">{{ __('ui.email') }}</label>
                        <input type="email" class="form-control" name="email">
                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                        <div id="emailHelp" class="form-text color-reg">Non condivideremo mai i tuoi dati.</div>
                    </div>
                    <div class=" col-8 col-sm-7 col-md-7 col-lg-7 mb-3 mx-auto">
                        <label for="name" class="form-label fs-5 fw-bold">{{ __('ui.nome') }}</label>
                        <input type="text" class="form-control" name="name">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-8 col-sm-7 col-md-7 col-lg-7 mb-3 mx-auto">
                        <label for="password" class="form-label fs-5 fw-bold">Password</label>
                        <input type="password" class="form-control" name="password">
                        @error('password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-8 col-sm-7 col-md-7 col-lg-7 mb-3 mx-auto">
                        <label for="password_confirmation"
                            class="form-label fs-5 fw-bold">{{ __('ui.confpass') }}</label>
                        <input type="password" class="form-control" name="password_confirmation">
                        @error('password_confirmation')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn myButton my-4">{{ __('ui.registrati') }}</button><br>
                    <a class="ms-2" href="{{ route('login') }}">Sei già registrato? Accedi qui</a>
                </form>
            </div>
        </div>
    </div>


</x-layout>


{{-- <x-layout>
    <form class="form" method="POST" action="{{ 'register' }}">
        @csrf
        <p class="title">Register </p>
        <div class="flex">
            <label>
                <input required="" placeholder="" type="text" class="input">
                <span>Firstname</span>
            </label>

            <label>
                <input required="" placeholder="" type="text" class="input">
                <span>Lastname</span>
            </label>
        </div>

        <label>
            <input required="" placeholder="" type="email" class="input">
            <span>Email</span>
        </label>

        <label>
            <input required="" placeholder="" type="password" class="input">
            <span>Password</span>
        </label>
        <label>
            <input required="" placeholder="" type="password" class="input">
            <span>Confirm password</span>
        </label>
        <button class="submit">Submit</button>
        <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
    </form>


</x-layout> --}}

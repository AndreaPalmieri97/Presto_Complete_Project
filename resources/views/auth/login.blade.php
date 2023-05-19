<x-layout>
    <div class="container-fluid mt-5">
        <div class="row ">
            <div class="card col-10 col-sm-8 col-md-10 col-lg-8 col-xxl-5 mx-auto py-5 text-center bg-form shadow-lg">
                <div class="card-header text-danger fw-bold fs-3 mb-5">{{__('ui.accedi')}}</div>
                <form class="text-center mx-auto" method="POST" action="{{ 'login' }}">
                    @csrf
                    <div class="col-8 col-sm-7 col-md-8 col-lg-10 mb-5 mx-auto">
                        <label for="email" class="form-label fs-5 fw-bold">{{__('ui.email')}}</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="col-8 col-sm-7 col-md-8 col-lg-10 mb-4 mx-auto ">
                        <label for="password" class="form-label fs-5 fw-bold">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn myButton my-3">{{__('ui.accedi')}}</button><br>
                    <a class="ms-2" href="{{ route('register') }}">Non sei ancora registrato? Cosa aspetti!</a>
                </form>
            </div>
        </div>
    </div>
</x-layout>

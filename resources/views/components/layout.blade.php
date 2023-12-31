<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    @vite (['resources/css/app.css','resources/js/app.js'])
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css%22%3E"> --}}
    <script src="https://kit.fontawesome.com/c6fe5385fc.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&display=swap');
    </style>
    @livewireStyles
</head>

<body>

    <x-navbar />

    @if (session('requestRevisor'))
        <div class="alert alert-success fade show mx-5 text-center my-3 fs-4 shadow-lg" role="alert">
            {{ session('requestRevisor') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    {{-- @if (Route::currentRouteName() != 'home') --}}
        <div class="min-vh-100">{{ $slot }}</div>
    {{-- @else
        {{ $slot }}
    @endif --}}
    <x-footer />

    @livewireScripts

</body>

</html>

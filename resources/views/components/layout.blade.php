<!DOCTYPE html>
<html lang="it">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        @vite (['resources/css/app.css','resources/js/app.js'])
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css%22%3E">
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;600;700&display=swap');
            </style>
        @livewireStyles
</head>
<body>


    <x-navbar2 />

    @if (session('requestRevisor'))
        <div class="alert alert-danger fade show mx-5 text-center my-3 fs-4 shadow-lg" role="alert">
            {{ session('requestRevisor') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    
    
    
    {{ $slot }}
    
    <div class="vh-100"></div>

    <x-footer />

    @livewireScripts
    
</body>


</html>

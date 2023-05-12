<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index-article') }}">Visualizza annunci</a>
                </li>
            </ul>
            @auth
                <li class="nav-item mx-3">
                    <p class="my-2 user-log">Ciao {{ Auth::user()->name }}</p>
                </li>
                @if (Auth::user()->is_revisor)
                    <li class="nav-item">
                        <a class="btn myButton nav-link active text-white" aria-current="page"
                            href="{{ route('revisor.index') }}">Zona Revisore
                            <span>{{ App\Models\Article::toBeRevisionedCount() }}
                                <span class="visually-hidden">Articoli da visionare</span>
                            </span>
                        </a>
                    </li>
                @endif
            @endauth
            <ul class="navbar-nav mb-2 mb-lg-0">
                <div class="d-flex justify-content-between align-items-center">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <button class="myButton ms-2"><a class="text-white" href="{{ route('annunci') }}">Inserisci
                                    annuncio</a></button>
                        </li>
                        <li class="nav-item">
                            <form class="mx-2" method="post" action="{{ route('logout') }}">
                                @csrf
                                <button class="myButton" type="submit">Logout</button>
                            </form>
                        </li>
                    @endauth
                </div>
            </ul>

        </div>
    </div>
</nav>

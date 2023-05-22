<nav class="navbar navbar-expand-lg sticky-top">
    <div class="container-fluid">
        <img src="../../img/logo.png" class="Logo">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">{{ __('ui.lingua') }}</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">
                                <x-_locale lang="it" />
                            </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">
                                <x-_locale lang="en" />
                            </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">
                                <x-_locale lang="es" />
                            </a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index-article') }}">{{ __('ui.linknavArticle') }}</a>
                </li>
                <form class="d-flex search mx-auto" role="search" action="{{ route('search.article') }}"
                    method="GET">
                    <input class="form-control me-2 px-3" type="search" placeholder="{{ __('ui.searchbtn') }}"
                        aria-label="Search" name="searched">
                    <button class="btn btn-search" type="submit">{{ __('ui.searchbtn') }}</button>
                </form>
            </ul>
            @auth
                <li class="nav-item mx-3">
                    <p class="my-2 user-log">Ciao {{ Auth::user()->name }}</p>
                </li>
                @if (Auth::user()->is_revisor)
                    <li class="nav-item">
                        <a class="btn myButton nav-link active text-white" aria-current="page"
                            href="{{ route('revisor.index') }}">{{ __('ui.zonarevisor') }}
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
                            <a class="nav-link" href="{{ route('register') }}">{{ __('ui.registrati') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @endguest
                    @auth
                        <li class="nav-item">
                            <button class="myButton ms-2"><a class="text-white"
                                    href="{{ route('annunci') }}">{{ __('ui.inserisciArticle') }}</a></button>
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

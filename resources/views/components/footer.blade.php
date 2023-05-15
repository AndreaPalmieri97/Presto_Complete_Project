<footer class="footer p-3 fw-bold d-flex justify-content-center align-items-center">
    <p class="col-md-4 mb-0 text-dark text-center">© 2023 Company, Inc</p>
    <ul class="nav col-md-4">
        <li class="nav-item"><a href="#" class="nav-link lead text-dark foo-hov">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link lead text-dark foo-hov">Andrea Palmieri</a></li>
        <li class="nav-item"><a href="#" class="nav-link lead text-dark foo-hov">Gabriele Acquaviva</a></li>
        @if (!Auth::user() || !Auth::user()->is_revisor)
            <li class="nav-item"><a href="{{ route('become.revisor') }}" class="nav-link lead text-dark foo-hov">Lavora con noi</a></li>
        @endif
    </ul>
</footer>
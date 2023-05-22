<footer class="text-center text-lg-start bg-light text-muted">
    <section class="d-flex justify-content-center justify-content-lg-space-around p-4 border-bottom">
        <div class="me-5">
            <span>Codice sorgente:</span>
            <a href="https://github.com/Hackademy70/presto.it.git/" target="blank" class="me-4 text-reset fs-5">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <div class="d-flex">
            @if (!Auth::user() || !Auth::user()->is_revisor)
                <li class="nav-item"><a href="{{ route('become.revisor') }}"
                        class="nav-link lead text-dark foo-hov">Lavora
                        con noi</a></li>
            @endif
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Links  -->
    <section class="link-footer">
        <div class="container mx-auto text-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-12 d-flex">
                    <div class="col-5 col-lg-2 col-xl-2 mb-4 mx-auto">
                        <h6 class="text-uppercase fw-bold mb-4">
                            Framework utilizzati
                        </h6>
                        <p>
                            <a class="text-reset">Laravel</a>
                        </p>
                        <p>
                            <a class="text-reset">Livewire</a>
                        </p>
                        <p>
                            <a class="text-reset">Bootstrap</a>
                        </p>
                    </div>
                    <!-- Links -->
                    <div class="col-7 col-lg-3 col-xl-3 mx-auto me-5 d-flex flex-column">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contatti</h6>
                        <a href="https://www.linkedin.com/in/gabriele-acquaviva/" target="blank"><i
                                class="fab fa-linkedin"></i> Gabriele Acquaviva</a>
                        <a href="https://www.linkedin.com/in/andrea-tommaso-palmieri/" target="blank"><i
                                class="fab fa-linkedin"></i> Andrea Palmieri</a>
                        <a href="https://www.linkedin.com/in/bartolomeoroggiowebdev/" target="blank"><i
                                class="fab fa-linkedin"></i> Bartolomeo Roggio</a>
                        <a href="https://www.linkedin.com/in/thomasfazzianideveloper/" target="blank"><i
                                class="fab fa-linkedin"></i> Thomas Fazziani</a>
                    </div>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4">

    </div>
    <!-- Copyright -->
</footer>

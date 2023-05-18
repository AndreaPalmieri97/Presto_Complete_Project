<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="fw-light fw-bold">Presto.it</h1>
                <p class="fs-4 fw-bold">{{ __('ui.headtitle') }}</p>
                <form class="d-flex search mx-auto" role="search" action="{{ route('search.article') }}" method="GET">
                    <input class="form-control me-2" type="search" placeholder="{{ __('ui.searchbtn') }}"
                        aria-label="Search" name="searched">
                    <button class="btn myButton2" type="submit">{{ __('ui.searchbtn') }}</button>
                </form>
            </div>
        </div>
    </div>
</header>

<!-- Page Content -->
<section class="py-5">
    <div class="container">
        <h2 class="fw-light fs-2 text-center fs-1">{{ __('ui.title1') }}</h2>
        <p class="text-center">{{ __('ui.title2') }}</p>
    </div>
</section>

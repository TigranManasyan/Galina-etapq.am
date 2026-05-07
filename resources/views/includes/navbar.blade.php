<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img style="width:55px" src="{{ asset('logo.png') }}" alt="">
        @php
            function localized_url($locale)
                {
                    $segments = request()->segments(); // current URL-ի segments
                    if (count($segments) > 0) {
                        $segments[0] = $locale; // առաջին segment-ը փոխում ենք նոր լեզվով
                    } else {
                        $segments = [$locale]; // եթե root է, ավելացնում ենք լեզուն
                    }

                    return url(implode('/', $segments));
                }
        @endphp
        <a href="{{ localized_url('hy') }}">Հայ</a> <br>
        <a href="{{ localized_url('en') }}">Eng</a>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="" class="nav-item nav-link active">{{ __('navbar.home') }}</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('navbar.about') }}</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('info')}}" class="dropdown-item">{{ __('navbar.information') }}</a>
                    <a href="{{ route('history') }}" class="dropdown-item">{{ __('navbar.history') }}</a>
                    <a href="{{ route('documents') }}" class="dropdown-item">{{ __('navbar.documents') }}</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('navbar.for_students') }}</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('partners') }}" class="dropdown-item">{{ __('navbar.partners') }}</a>
                    <a href="{{ route('olympiads') }}" class="dropdown-item">{{ __('navbar.olympiads') }}</a>
                    <a href="{{ route('library') }}" class="dropdown-item">{{ __('navbar.electronic_library') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('navbar.for_applicants') }}</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('professions') }}" class="dropdown-item">{{ __('navbar.professions') }}</a>
                    <a href="{{ route('procedure') }}" class="dropdown-item">{{ __('navbar.procedure') }}</a>
                    <a href="{{ route('necessary_documents') }}" class="dropdown-item">{{ __('navbar.necessary_documents') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ __('navbar.media') }}</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('news') }}" class="dropdown-item">{{ __('navbar.news') }}</a>
                    <a href="{{ route('videos') }}" class="dropdown-item">{{ __('navbar.video') }}</a>
                    <a href="{{ route('gallery') }}" class="dropdown-item">{{ __('navbar.gallery') }}</a>
                </div>
            </div>
            <a href="" class="nav-item nav-link">{{ __('navbar.contact') }}</a>
        </div>

    </div>
</nav>
<!-- Navbar End -->

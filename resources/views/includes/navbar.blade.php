@php use Illuminate\Support\Facades\Request; @endphp
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
    <a href="{{ route('home') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <img style="width:80px" src="{{ asset('logo.png') }}" alt="">
        @php
            function localized_url($locale)
                {
                    $segments = request()->segments();
                    if (count($segments) > 0) {
                        $segments[0] = $locale;
                    } else {
                        $segments = [$locale];
                    }
                    return url(implode('/', $segments));
                }
        @endphp
        <a class="lang-link @if(app()->getLocale() == 'hy')active-lang-link @endif" href="{{ localized_url('hy') }}">Հայ</a> <br>
        <a class="lang-link @if(app()->getLocale() == 'en')active-lang-link @endif" href="{{ localized_url('en') }}">Eng</a>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="{{ route('home') }}" class="nav-item nav-link @if(Route::is('home')) active @endif">{{ __('navbar.home') }}</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle @if(Route::is('info') || Route::is('history') || Route::is('documents')) active @endif" data-bs-toggle="dropdown">{{ __('navbar.about') }}</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('info')}}" class="dropdown-item ">{{ __('navbar.information') }}</a>
                    <a href="{{ route('history') }}" class="dropdown-item">{{ __('navbar.history') }}</a>
                    <a href="{{ route('documents') }}" class="dropdown-item">{{ __('navbar.documents') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle @if(Route::is('partners') || Route::is('olympiads') || Route::is('library')) active @endif"
                   data-bs-toggle="dropdown">{{ __('navbar.for_students') }}</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('partners') }}" class="dropdown-item">{{ __('navbar.partners') }}</a>
                    <a href="{{ route('olympiads') }}" class="dropdown-item">{{ __('navbar.olympiads') }}</a>
                    <a href="{{ route('library') }}" class="dropdown-item">{{ __('navbar.electronic_library') }}</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle @if(Route::is('professions') || Route::is('procedure') || Route::is('necessary_documents')) active @endif"
                   data-bs-toggle="dropdown">{{ __('navbar.for_applicants') }}</a>
                <div class="dropdown-menu fade-down m-0">
                    <a href="{{ route('professions') }}" class="dropdown-item">{{ __('navbar.professions') }}</a>
                    <a href="{{ route('procedure') }}" class="dropdown-item">{{ __('navbar.procedure') }}</a>
                    <a href="{{ route('necessary_documents') }}"
                       class="dropdown-item">{{ __('navbar.necessary_documents') }}</a>
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

            <a href="{{ route('contact') }}" class="nav-item nav-link">{{ __('navbar.contact') }}</a>
        </div>
    </div>
</nav>

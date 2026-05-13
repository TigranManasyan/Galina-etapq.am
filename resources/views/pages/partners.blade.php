@extends('layouts.app')
@section('title') Գործընկերներ @endsection
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 mb-5">
            <div class="col-lg-12">
                <h6 class="section-title bg-white text-start text-primary pe-3">{{ __('partners.partners-title') }}</h6>
                <p class="mb-0">{{ __('partners.section-1') }}</p>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="partners-section">
                    <div class="partner mb-2">
                        <img src="{{ asset('asset/img/partner/alex-logo.png') }}" alt="{{ __('partners.section-3') }}">
                        <div class="partner-name">
                            <a href="https://alextextile.am/en/" target="_blank">{{ __('partners.section-3') }}</a>
                        </div>
                    </div>
                    <div class="partner mb-2">
                        <img src="{{ asset('asset/img/partner/KKF.png') }}" alt="{{ __('partners.section-4') }}">
                        <div class="partner-name">
                            <a href="https://www.facebook.com/kanakerikarifabrika/?locale=hy_AM" target="_blank">{{ __('partners.section-4') }}</a>
                        </div>
                    </div>
                    <div class="partner mb-2">
                        <img src="{{ asset('asset/img/partner/politex.png') }}" alt="{{ __('partners.section-5') }}">
                        <div class="partner-name">
                            <a href="https://polytech.am/" target="_blank">{{ __('partners.section-5') }}</a>
                        </div>
                    </div>
                    <div class="partner mb-2">
                        <img src="{{ asset('asset/img/partner/Liga.png') }}" alt="{{ __('partners.section-6') }}">
                        <div class="partner-name">
                            <a href="https://www.liga.am/hy" target="_blank">{{ __('partners.section-6') }}</a>
                        </div>
                    </div>
                    <div class="partner mb-2">
                        <img src="{{ asset('asset/img/partner/VTB.png') }}" alt="{{ __('partners.section-7') }}">
                        <div class="partner-name">
                            <a href="https://www.vtb.am" target="_blank">{{ __('partners.section-7') }}</a>
                        </div>
                    </div>
                    <div class="partner mb-2">
                        <img src="{{ asset('asset/img/partner/ingo-logo.png') }}" alt="{{ __('partners.section-8') }}">
                        <div class="partner-name">
                            <a href="https://www.ingoarmenia.am" target="_blank">{{ __('partners.section-8') }}</a>
                        </div>
                    </div>
                    <div class="partner mb-2">
                        <img src="{{ asset('asset/img/partner/nairi-logo.png') }}" alt="{{ __('partners.section-9') }}">
                        <div class="partner-name">
                            <a href="https://www.nairi-insurance.am" target="_blank">{{ __('partners.section-9') }}</a>
                        </div>
                    </div>
                    <div class="partner mb-2">
                        <img src="{{ asset('asset/img/partner/aab-logo.png') }}" alt="{{ __('partners.section-10') }}">
                        <div class="partner-name">
                            <a href="https://www.prime-insurance.com/" target="_blank">{{ __('partners.section-10') }}</a>
                        </div>
                    </div>
                    <div class="partner mb-2">
                        <img src="{{ asset('asset/img/partner/anel-logo.png') }}" alt="{{ __('partners.section-11') }}">
                        <div class="partner-name">
                            <a href="https://www.anel.am/hy/" target="_blank">{{ __('partners.section-11') }}</a>
                        </div>
                    </div>
                    <div class="partner mb-2">
                        <img src="{{ asset('asset/img/partner/MNKO.png') }}" alt="{{ __('partners.section-12') }}">
                        <div class="partner-name">
                            <a href="https://www.aspu.am/" target="_blank">{{ __('partners.section-12') }}</a>
                        </div>
                    </div>
                    <div class="partner mb-2">
                        <img src="{{ asset('asset/img/partner/logo_am.png') }}" alt="{{ __('partners.section-13') }}">
                        <div class="partner-name">
                            <a href="https://www.asue.am/" target="_blank">{{ __('partners.section-13') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

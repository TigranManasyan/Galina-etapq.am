@extends('layouts.app')
@section('title') Պատմություն @endsection
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">

                <h6 class="section-title bg-white text-start text-primary pe-3">{{ __('history.history-title') }}</h6>
                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('history.section-1') }}</p>
                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('history.section-2') }}</p>
                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('history.section-3') }}</p>
                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('history.section-4') }}</p>
                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('history.section-5') }}</p>
                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('history.section-6') }}</p>
                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('history.section-7') }}</p>




            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <div class="images">
                        <div class="big">
                            <img src="{{ asset('asset/img/history/history-7.jpg') }}" alt="">
                        </div>
                        <div class="vertical">
                            <img src="{{ asset('asset/img/history/history-1.jpg') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('asset/img/history/history-2.jpg') }}" alt="">
                        </div>
                        <div class="horizontal">
                            <img src="{{ asset('asset/img/history/history-4.jpg') }}" alt="">
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

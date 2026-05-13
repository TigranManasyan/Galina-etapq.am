@extends('layouts.app')
@section('title') Ընդհանուր տեղեկատվություն @endsection
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h6 class="section-title bg-white text-start text-primary pe-3">{{ __('general.general') }}</h6>

                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_1') }}</p>

                <ul style="list-style-type:none">
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_1_item_1') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_1_item_2') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_1_item_3') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_1_item_4') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_1_item_5') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_1_item_6') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_1_item_7') }}</li>
                </ul>

                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_2') }}</p>

                <ul  style="list-style-type:none">
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_2_item_1') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_2_item_2') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_2_item_3') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_2_item_4') }}</li>
                </ul>

                <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_3') }}</p>

                 <ul  style="list-style-type:none">
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_3_item_1') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_3_item_2') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_3_item_3') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_3_item_4') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_3_item_5') }}</li>
                    <li class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_3_item_6') }}</li>
                 </ul>


            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{asset('asset/img/cat-3.jpg')}}" alt="" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

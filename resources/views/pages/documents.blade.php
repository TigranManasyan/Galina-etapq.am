@extends('layouts.app')
@section('title') Փաստաթղթեր  @endsection
@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">

                <h6 class="section-title bg-white text-start text-primary pe-3">{{ __('documents.documents-title') }}</h6>
                @foreach($documents as $document)
                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ $document->name_hy }}</p>
                @endforeach
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{asset('asset/img/docs-cover.png')}}" alt="" style="object-fit: cover;">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')
@section('title') {{ __('olympiads.olympiads-title')  }} @endsection
@section('content')
    <main class="main">
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp " data-wow-delay="0.1s">
                    <h2 class="section-title bg-white text-center text-primary px-3">{{ __('olympiads.olympiads-title') }}</h2>
                </div>
                <div class="row mt-3 g-4 justify-content-center">
                    @foreach($olympiads as $olympiad)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="course-item bg-light">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('uploads/olympiads/' . $olympiad->cover) }}" alt="">
                                </div>
                                <div class="text-center p-4 pb-2">
                                    <h5 class="mb-4"><a href="{{ $olympiad->url }}">{{ $olympiad['title_' . app()->getLocale()] }}</a></h5>
                                </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection

@extends('layouts.app')
@section('title') {{ __('gallery.title') }} @endsection
@section('content')

    <main class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h6 class="section-title bg-white text-start text-primary pe-3 mt-5">{{ __('gallery.page_header') }}</h6>
{{--                    <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>{{ __('general.section_1') }}</p>--}}

                    <div class="gallery d-flex mt-5 mb-5">
                        @foreach($galleries as $gallery)

                            <div class="gallery-box" style="margin-right:5px;width:250px;height:250px">

                                @php
                                    $firstImage = $gallery->images->first();
                                @endphp

                                @if($firstImage)
                                    <a href="{{ asset('uploads/gallery/'.$firstImage->path) }}"
                                       data-fancybox="gallery-{{ $gallery->id }}">

                                        <img src="{{ asset('uploads/gallery/'.$firstImage->path) }}" style="width:100%; height:100%">
                                    </a>
                                @endif
                                @foreach($gallery->images->skip(1) as $image)
                                    <a href="{{ asset('uploads/gallery/'.$image->path) }}"
                                       data-fancybox="gallery-{{ $gallery->id }}"
                                       style="display:none;">
                                    </a>
                                @endforeach

                                <p class="mt-2 text-center"> {{ $gallery['title_' . app()->getLocale()] }}</p>

                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>
    @push('scripts')
        <script>
            $(document).ready(function() {
                Fancybox.bind("[data-fancybox='gallery']", {
                    loop: true
                });
            });
        </script>
    @endpush
@endsection

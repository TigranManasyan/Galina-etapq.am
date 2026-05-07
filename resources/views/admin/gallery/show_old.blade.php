@extends('admin.layouts.app')
@section('title')Տեսադարան @endsection

@section('content')

    <main class="main">
        <h2>{{ $gallery->title }}</h2>

        <div class="gallery">
            @foreach($galleries as $gallery)

                <div class="gallery-box">

                    {{-- 👇 Preview image (միայն առաջինը ցույց ենք տալիս) --}}
                    @php
                        $firstImage = $gallery->images->first();
                    @endphp

                    @if($firstImage)
                        <a href="{{ asset('uploads/gallery/'.$firstImage->path) }}"
                           data-fancybox="gallery-{{ $gallery->id }}">

                            <img src="{{ asset('uploads/gallery/'.$firstImage->path) }}" width="200">
                        </a>
                    @endif


                    {{-- 👇 Մնացած նկարները (թաքնված են, բայց slider-ում կան) --}}
                    @foreach($gallery->images->skip(1) as $image)
                        <a href="{{ asset('uploads/gallery/'.$image->path) }}"
                           data-fancybox="gallery-{{ $gallery->id }}"
                           style="display:none;">
                        </a>
                    @endforeach

                    <h4>{{ $gallery->title_hy }}</h4>

                </div>

            @endforeach
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

@extends('admin.layouts.app')
@section('title')Տեսադարան @endsection

@section('content')

    <main class="main">
        <h2>{{ $gallery->title_hy }}</h2>
        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('fail'))
            <div class="alert alert-danger">{{ session('danger') }}</div>
        @endif
        <div class="d-flex">
            @foreach($gallery->images as $image)
                <div class="d-flex flex-column" style="width:150px; margin-right:10px">
                    {{-- Նկար --}}
                    <img src="{{ asset('uploads/gallery/' . $image->path) }}"
                         style="width:150px; margin-bottom:5px">

                    {{-- 🔁 Replace form --}}
                    <form action="{{ route('admin.image.update', $image->id) }}"
                          method="POST"
                          enctype="multipart/form-data">

                        @csrf
                        @method('PUT')

                        <input type="file" name="image" class="form-control mb-1">

                        <button class="btn btn-primary btn-sm w-100 mb-1">
                            ՓՈԽԵԼ
                        </button>
                    </form>

                    {{-- 🗑️ Delete --}}
                    <a href="{{ route('admin.image.delete', $image->id) }}"
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('Ցանկանում եք ջնջե՞լ')">
                        ՋՆՋԵԼ
                    </a>
                </div>
            @endforeach
        </div>
    </main>

@endsection

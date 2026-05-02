@extends('admin.layouts.app')
@section('title') Փաստաթղթերի ցանկ @endsection
@section('content')
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between align-items-baseline">
            <h3>ՓԱՍՏԱԹՂԹԵՐ</h3>
            <a href="{{ route('admin.document.create') }}" class="btn btn-primary btn-sm">Ավելացնել</a>
        </div>
    </div>
    <div class="row">
        <div class="com-md-8">
            <ol>
                @foreach($documents as $document)
                    <li>
                        <a target="_blank" href="{{ url("uploads/{$document->path}") }}">
                            <i style="color:red; font-size:25px;line-height: 35px;" class="fa-solid fa-file-pdf"></i>
                            {{ $document->name_hy }}
                        </a>
                        <a href="{{ route('admin.document.edit', $document->id) }}"><i style="color:green; font-size:18px;" class="fa-solid fa-edit"></i></a>
                        <a href="{{ route('admin.document.destroy', $document->id) }}" onclick="return confirm('Ցանկանում եք ջնջե՞լ')"><i style="color:red; font-size:18px;" class="fa-solid fa-trash"></i></a>
                    </li>
                @endforeach
            </ol>
        </div>
    </div>
@endsection

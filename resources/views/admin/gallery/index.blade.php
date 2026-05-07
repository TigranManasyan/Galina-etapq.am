@extends('admin.layouts.app')
@section('title') Տեսադարան ցանկ @endsection
@section('content')
    <main class="main">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-baseline">
                <h3>ՏԵՍԱԴԱՐԱՆՆԵՐ</h3>
                <a href="{{ route('admin.gallery.create') }}" class="btn btn-primary btn-sm">Ստեղծել</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @elseif(session('fail'))
                    <div class="alert alert-danger">{{ session('fail') }}</div>
                @endif
            </div>
        </div>
        <div class="row">

            <div class="col-md-12">
                <table class="table table-hover table-striped">
                    <thead>
                    <tr>
                        <th>Վերնագիր</th>
                        <th>Կարգավիճակ</th>
                        <th>Գործողություններ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($galleries as $gallery)
                        <tr>
                            <td>{{ $gallery->title_hy }}</td>
                            <td>@if($gallery->published == 1) <span class="text-success">Ակտիվ</span>@else <span class="text-danger">Պասիվ</span>@endif</td>
                            <td>
                                <a href="{{ route('admin.gallery.attach_view', $gallery->id) }}" class="btn btn-outline-warning btn-sm">Կցել նկար</a>
                                <a href="{{ route('admin.gallery.changes_status', ['id' => $gallery->id, 'status' => ($gallery->published == 1) ? 0 : 1]) }}" class="btn btn-outline-info btn-sm">
                                    @if($gallery->published == 1)
                                        Ապաակտիվացնել
                                    @else
                                        Ակտիվացնել
                                    @endif
                                </a>
                                <a class="btn btn-outline-success btn-sm" href="{{ route('admin.gallery.show', $gallery->id) }}">Ավելին</a>
                                <a class="btn btn-outline-danger btn-sm" href="{{ route('admin.gallery.destroy', $gallery->id) }}" onclick="return confirm('Ցանկանում եք ջնջե՞լ')">Ջնջել</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection

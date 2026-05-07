@extends('admin.layouts.app')
@section('title') Տեսահոլովակների ցանկ @endsection
@section('content')
    <main class="main">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-baseline">
                <h3>ՏԵՍԱՀՈԼՈՎԱԿՆԵՐ</h3>
                <a href="{{ route('admin.video.create') }}" class="btn btn-primary btn-sm">Ավելացնել</a>
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
                    @foreach($videos as $video)
                        <tr>
                            <td>{{ $video->title_hy }}</td>
                            <td>@if($video->published == 1) <span class="text-success">Ակտիվ</span>@else <span class="text-danger">Պասիվ</span>@endif</td>
                            <td>
                                <a href="{{ route('admin.video.show', [$video->id, !$video->published]) }}" class="btn btn-outline-warning btn-sm">Ավելին</a>
                                <a href="{{ route('admin.video.changes_status', ['id' => $video->id, 'status' => ($video->published == 1) ? 0 : 1]) }}" class="btn btn-outline-info btn-sm">
                                    @if($video->published == 1)
                                        Ապաակտիվացնել
                                    @else
                                        Ակտիվացնել
                                    @endif
                                </a>
                                <a class="btn btn-outline-danger btn-sm" href="{{ route('admin.video.destroy', $video->id) }}" onclick="return confirm('Ցանկանում եք ջնջե՞լ')">Ջնջել</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection

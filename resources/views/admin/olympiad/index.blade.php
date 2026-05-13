@extends('admin.layouts.app')
@section('title') Օլիմպիադաների ցանկ @endsection
@section('content')
    <main class="main">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-baseline">
                <h3>ՕԼԻՄՊԻԱԴԱՆԵՐ</h3>
                <a href="{{ route('admin.olympiad.create') }}" class="btn btn-primary btn-sm">Ավելացնել</a>
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
                    @foreach($olympiads as $olympiad)
                        <tr>
                            <td>{{ $olympiad->title_hy }}</td>
                            <td>@if($olympiad->published == 1) <span class="text-success">Ակտիվ</span>@else <span class="text-danger">Պասիվ</span>@endif</td>
                            <td>
                                <a href="{{ route('admin.olympiad.show', [$olympiad->id, !$olympiad->published]) }}" class="btn btn-outline-warning btn-sm">Ավելին</a>
                                <a href="{{ route('admin.olympiad.changes_status', ['id' => $olympiad->id, 'status' => ($olympiad->published == 1) ? 0 : 1]) }}" class="btn btn-outline-info btn-sm">
                                    @if($olympiad->published == 1)
                                        Ապաակտիվացնել
                                    @else
                                        Ակտիվացնել
                                    @endif
                                </a>
                                <a class="btn btn-outline-danger btn-sm" href="{{ route('admin.olympiad.destroy', $olympiad->id) }}" onclick="return confirm('Ցանկանում եք ջնջե՞լ')">Ջնջել</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection

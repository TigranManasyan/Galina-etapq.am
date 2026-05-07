@extends('admin.layouts.app')
@section('title') Հայտարարությունների ցանկ @endsection
@section('content')
    <main class="main">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-between align-items-baseline">
                <h3>ՀԱՅՏԱՐԱՐՈՒԹՅՈՒՆՆԵՐ</h3>
                <a href="{{ route('admin.announcement.create') }}" class="btn btn-primary btn-sm">Ավելացնել</a>
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
                        <th>Հրապարակման ամսաթիվ</th>
                        <th>Slug</th>
                        <th>Կարգավիճակ</th>
                        <th>Գործողություններ</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($announcements as $announcement)
                        <tr>
                            <td>{{ $announcement->title_hy }}</td>
                            <td>{{ $announcement->published_at }}</td>
                            <td>{{ $announcement->slug }}</td>
                            <td>@if($announcement->published == 1) <span class="text-success">Ակտիվ</span>@else <span class="text-danger">Պասիվ</span>@endif</td>
                            <td>
                                <a href="{{ route('admin.announcement.show', [$announcement->id, !$announcement->published]) }}" class="btn btn-outline-warning btn-sm">Ավելին</a>
                                <a href="{{ route('admin.announcement.changes_status', ['id' => $announcement->id, 'status' => ($announcement->published == 1) ? 0 : 1]) }}" class="btn btn-outline-info btn-sm">
                                    @if($announcement->published == 1)
                                        Ապաակտիվացնել
                                    @else
                                        Ակտիվացնել
                                    @endif
                                </a>
                                <a class="btn btn-outline-danger btn-sm" href="{{ route('admin.announcement.destroy', $announcement->id) }}" onclick="return confirm('Ցանկանում եք ջնջե՞լ')">Ջնջել</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection

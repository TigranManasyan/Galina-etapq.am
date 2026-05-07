@extends('admin.layouts.app')
@section('title') Ձեռնարկների ցանկ @endsection
@section('content')
    <div class="row">
        <div class="col-md-12 d-flex justify-content-between align-items-baseline">
            <h3>ՁԵՌՆԱՐԿՆԵՐ</h3>
            <a href="{{ route('admin.library.create') }}" class="btn btn-primary btn-sm">Ավելացնել</a>
        </div>
    </div>
    <div class="row">
        <div class="com-md-8">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>Ամբիոն</th>
                        <th>Անվանում</th>
                        <th>Հեղինակ</th>
                        <th>Տարեթիվ</th>
                        <th>Ֆայլ</th>
                        <th>Գործողություններ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->department }}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->year }}</td>
                            <td><a href="{{ url("uploads/{$book->path}") }}" target="_blank">Բացել</a></td>
                            <td>
                                <a href="{{ route('admin.library.edit', $book->id) }}" style="color:#0ccd06"><i class="fa-regular fa-pen-to-square"></i></a>
                                <a href="{{ route('admin.library.destroy', $book->id) }}" style="color:#f4102b"><i class="fa-regular fa-trash-can"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
{{--            --}}

        </div>
    </div>
@endsection

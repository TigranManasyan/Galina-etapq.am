@extends('admin.layouts.app')
@section('title') {{ $olympiad->title_hy }} @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Օլիմպիադայի խմբագրում</h5>
                </div>

                <div class="card-body p-2">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif(session('fail'))
                        <div class="alert alert-danger">{{ session('fail') }}</div>
                    @endif
                    <form id="update-library" action="{{ route('admin.olympiad.update', $olympiad->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title_hy" class="form-lable">Վենագիր /հայերեն/</label>
                            <input value="{{ $olympiad->title_hy }}" placeholder="Վերնագիրը հայերեն" type="text" class="form-control @if($errors->has('title_hy')) is-invalid @endif" id="title_hy" name="title_hy">
                            @if($errors->has('title_hy'))
                                <div class="invalid-feedback">{{ $errors->first('title_hy') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="url" class="form-lable">Հղում<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input value="{{ $olympiad->url }}" placeholder="https://" type="url" class="form-control @if($errors->has('url')) is-invalid @endif" id="url" name="url">
                            @if($errors->has('url'))
                                <div class="invalid-feedback">{{ $errors->first('url') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="title_en" class="form-lable">Վենագիր /անգլերեն/</label>
                            <input value="{{ $olympiad->title_en }}" placeholder="Վերնագիրը անգլերեն" type="text" class="form-control @if($errors->has('title_en')) is-invalid @endif" id="title_en" name="title_en">
                            @if($errors->has('title_en'))
                                <div class="invalid-feedback">{{ $errors->first('title_en') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="d-flex justify-content-center">
                                <img style="max-width: 600px;" src="{{ asset('uploads/olympiads/' . $olympiad->cover) }}" alt="">
                            </div>
                            <label for="cover_photo" class="form-lable">Նկար</label>
                            <input type="file" class="form-control @if($errors->has('cover')) is-invalid @endif" id="cover" name="cover">
                            @if($errors->has('cover'))
                                <div class="invalid-feedback">{{ $errors->first('cover') }}</div>
                            @endif
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-success btn-sm">Պահպանել <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

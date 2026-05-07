@extends('admin.layouts.app')
@section('title') {{ $announcement->title_hy }} @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Ձեռնարիկի ավելացում</h5>
                </div>

                <div class="card-body p-2">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif(session('fail'))
                        <div class="alert alert-danger">{{ session('fail') }}</div>
                    @endif
                    <form id="save-library" action="{{ route('admin.announcement.update', $announcement->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title_hy" class="form-lable">Վենագիր /հայերեն/</label>
                            <input value="{{ $announcement->title_hy }}" placeholder="Վերնագիրը հայերեն" type="text" class="form-control @if($errors->has('title_hy')) is-invalid @endif" id="title_hy" name="title_hy">
                            @if($errors->has('title_hy'))
                                <div class="invalid-feedback">{{ $errors->first('title_hy') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="title_en" class="form-lable">Վենագիր /անգլերեն/</label>
                            <input value="{{ $announcement->title_en }}" placeholder="Վերնագիրը անգլերեն" type="text" class="form-control @if($errors->has('title_en')) is-invalid @endif" id="title_en" name="title_en">
                            @if($errors->has('title_en'))
                                <div class="invalid-feedback">{{ $errors->first('title_en') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="body_hy" class="form-lable">Տեքստ /հայերեն/</label>
                            <textarea rows="6" placeholder="Տեքստը հայերեն" class="form-control @if($errors->has('body_hy')) is-invalid @endif" id="body_hy" name="body_hy">{{ $announcement->body_hy }}</textarea>
                            @if($errors->has('body_hy'))
                                <div class="invalid-feedback">{{ $errors->first('body_hy') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="body_en" class="form-lable">Տեքստ /անգլերեն/</label>
                            <textarea rows="6" placeholder="Տեքստը անգլերեն" class="form-control @if($errors->has('body_en')) is-invalid @endif" id="body_en" name="body_en">{{ $announcement->title_en }}</textarea>
                            @if($errors->has('body_en'))
                                <div class="invalid-feedback">{{ $errors->first('body_en') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="published_at" class="form-lable">Հրապարակման ամսաթիվ</label>
                            <input value="{{ $announcement->published_at }}" type="date" class="form-control @if($errors->has('published_at')) is-invalid @endif" id="published_at" name="published_at">
                            @if($errors->has('published_at'))
                                <div class="invalid-feedback">{{ $errors->first('published_at') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="d-flex justify-content-center">
                                <img style="max-width: 600px;" src="{{ asset('uploads/announcements/' . $announcement->cover_photo) }}" alt="">
                            </div>
                            <label for="cover_photo" class="form-lable">Նկար</label>
                            <input type="file" class="form-control @if($errors->has('cover_photo')) is-invalid @endif" id="cover_photo" name="cover_photo">
                            @if($errors->has('cover_photo'))
                                <div class="invalid-feedback">{{ $errors->first('cover_photo') }}</div>
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

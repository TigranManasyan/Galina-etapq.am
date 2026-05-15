@extends('admin.layouts.app')
@section('title') Նոր հրապարակում @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Հրապարակման ստեղծում</h5>
                </div>

                <div class="card-body p-2">
                    <form id="save-library" action="{{ route('admin.article.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title_hy" class="form-lable">Վենագիր (հայերեն)<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input value="{{ old('title_hy') }}" placeholder="Վերնագիրը հայերեն" type="text" class="form-control @if($errors->has('title_hy')) is-invalid @endif" id="title_hy" name="title_hy">
                            @if($errors->has('title_hy'))
                                <div class="invalid-feedback">{{ $errors->first('title_hy') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="title_en" class="form-lable">Վենագիր (անգլերեն)<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input value="{{ old('title_en') }}" placeholder="Վերնագիրը անգլերեն" type="text" class="form-control @if($errors->has('title_en')) is-invalid @endif" id="title_en" name="title_en">
                            @if($errors->has('title_en'))
                                <div class="invalid-feedback">{{ $errors->first('title_en') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="body_hy" class="form-lable">Տեքստ (հայերեն)<sup style="color:red;font-weight: bold;">*</sup></label>
                            <textarea rows="6" placeholder="Տեքստը հայերեն" class="form-control @if($errors->has('body_hy')) is-invalid @endif" id="body_hy" name="body_hy">{{ old('body_hy') }}</textarea>
                            @if($errors->has('body_hy'))
                                <div class="invalid-feedback">{{ $errors->first('body_hy') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="body_en" class="form-lable">Տեքստ (անգլերեն)<sup style="color:red;font-weight: bold;">*</sup></label>
                            <textarea rows="6" placeholder="Տեքստը անգլերեն" class="form-control @if($errors->has('body_en')) is-invalid @endif" id="body_en" name="body_en">{{ old('body_en') }}</textarea>
                            @if($errors->has('body_en'))
                                <div class="invalid-feedback">{{ $errors->first('body_en') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="slug" class="form-lable">Slug<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input value="{{ old('slug') }}" placeholder="Slug SEO-ի համար" type="text" class="form-control @if($errors->has('slug')) is-invalid @endif" id="slug" name="slug">
                            @if($errors->has('slug'))
                                <div class="invalid-feedback">{{ $errors->first('slug') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="published_at" class="form-lable">Հրապարակման ամսաթիվ<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input value="{{ old('published_at') }}" type="date" class="form-control @if($errors->has('published_at')) is-invalid @endif" id="published_at" name="published_at">
                            @if($errors->has('published_at'))
                                <div class="invalid-feedback">{{ $errors->first('published_at') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="more_url" class="form-lable">Հղում<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input value="{{ old('more_url') }}" placeholder="https://" type="url" class="form-control @if($errors->has('more_url')) is-invalid @endif" id="more_url" name="more_url">
                            @if($errors->has('more_url'))
                                <div class="invalid-feedback">{{ $errors->first('more_url') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="cover_photo" class="form-lable">Նկար<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input type="file" class="form-control @if($errors->has('cover_photo')) is-invalid @endif" id="cover_photo" name="cover_photo">
                            @if($errors->has('cover_photo'))
                                <div class="invalid-feedback">{{ $errors->first('cover_photo') }}</div>
                            @endif
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Պահպանել <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

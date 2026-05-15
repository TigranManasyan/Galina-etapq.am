@extends('admin.layouts.app')
@section('title') Նոր տեսահոլովակ @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Տեսահոլովակի ստեղծում</h5>
                </div>

                <div class="card-body p-2">
                    <form id="save-video" action="{{ route('admin.video.store') }}" method="post">
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
                            <label for="publish_date" class="form-lable">Հրապարակման ամսաթիվ<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input value="{{ old('publish_date') }}" type="date" class="form-control @if($errors->has('publish_date')) is-invalid @endif" id="publish_date" name="publish_date">
                            @if($errors->has('publish_date'))
                                <div class="invalid-feedback">{{ $errors->first('publish_date') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="embed" class="form-lable">Տեսահոլովալի embed<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input value="{{ old('embed') }}" placeholder="_4p3Jn_YEUQ" type="text" class="form-control @if($errors->has('embed')) is-invalid @endif" id="embed" name="embed">
                            @if($errors->has('embed'))
                                <div class="invalid-feedback">{{ $errors->first('embed') }}</div>
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

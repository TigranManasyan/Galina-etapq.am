@extends('admin.layouts.app')
@section('title') {{ $document->name_hy }} - խմբագրում @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Փաստաթղթի խմբագրում</h5>
                </div>

                <div class="card-body p-2">
                    <form id="save-group" action="{{ route('admin.document.update', $document->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name_hy" class="form-lable">Փաստաթղթի անվանումը հայերենով</label>
                            <input type="text" id="name_hy" class="form-control @if($errors->has('name_hy'))in-valid @endif" placeholder="Փաստաթղթի անվանումը հայերենով" name="name_hy" value="{{ $document->name_hy }}">
                            @if($errors->has('name_hy'))
                                <div class="invalid-feedback">{{ $errors->first('name_hy') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name_en" class="form-lable">Փաստաթղթի անվանումը անգլերենով</label>
                            <input type="text" id="name_en" class="form-control @if($errors->has('name_en'))in-valid @endif" placeholder="Փաստաթղթի անվանումը անգլերենով" name="name_en" value="{{ $document->name_en }}">
                            @if($errors->has('name_en'))
                                <div class="invalid-feedback">{{ $errors->first('name_en') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="doc" class="input-group">Ընտրել փաստաթուղթը</label>
                            <input type="file" id="doc" class="form-control @if($errors->has('doc'))in-valid @endif" name="doc" value="{{ old('doc') }}">
                            @if($errors->has('doc'))
                                <div class="invalid-feedback">{{ $errors->first('doc') }}</div>
                            @endif
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-success">Պահպանել <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

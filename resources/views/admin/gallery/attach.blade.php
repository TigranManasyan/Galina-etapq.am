@extends('admin.layouts.app')
@section('title') Նոր տեսահոլովակ @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Տեսադարանի ստեղծում</h5>
                </div>

                <div class="card-body p-2">
                    <form id="attach-photo" action="{{ route('admin.gallery.attach') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="form-group">
                            <label for="gallery_id" class="form-lable">Տեսադարան</label>
                            <select name="gallery_id" id="gallery_id" class="form-control @if($errors->has('gallery_id')) is-invalid @endif" readonly="">

                                @foreach($galleries as $current_gallery)
                                    <option @if($current_gallery->id == $gallery->id) selected @endif value="{{ $current_gallery->id }}">{{ $current_gallery->title_hy }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('gallery_id'))
                                <div class="invalid-feedback">{{ $errors->first('gallery_id') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="image" class="form-lable">Նկար</label>
                            <input multiple value="{{ old('image') }}" type="file" class="form-control @if($errors->has('image')) is-invalid @endif" id="image" name="images[]">
                            @if($errors->has('image'))
                                <div class="invalid-feedback">{{ $errors->first('image') }}</div>
                            @endif
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Կցել <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

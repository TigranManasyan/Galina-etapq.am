@extends('admin.layouts.app')
@section('title') {{ $video->title_hy }} @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Տեսահոլովակի խմբագրում</h5>
                </div>

                <div class="card-body p-2">
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @elseif(session('fail'))
                        <div class="alert alert-danger">{{ session('fail') }}</div>
                    @endif
                    <form id="update-video" action="{{ route('admin.video.update', $video->id) }}" method="post" >
                        @csrf
                        <div class="form-group">
                            <label for="title_hy" class="form-lable">Վենագիր /հայերեն/</label>
                            <input value="{{ $video->title_hy }}" placeholder="Վերնագիրը հայերեն" type="text" class="form-control @if($errors->has('title_hy')) is-invalid @endif" id="title_hy" name="title_hy">
                            @if($errors->has('title_hy'))
                                <div class="invalid-feedback">{{ $errors->first('title_hy') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="title_en" class="form-lable">Վենագիր /անգլերեն/</label>
                            <input value="{{ $video->title_en }}" placeholder="Վերնագիրը անգլերեն" type="text" class="form-control @if($errors->has('title_en')) is-invalid @endif" id="title_en" name="title_en">
                            @if($errors->has('title_en'))
                                <div class="invalid-feedback">{{ $errors->first('title_en') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="publish_date" class="form-lable">Հրապարակման ամսաթիվ</label>
                            <input value="{{ $video->publish_date }}" placeholder="Վերնագիրը անգլերեն" type="date" class="form-control @if($errors->has('publish_date')) is-invalid @endif" id="publish_date" name="publish_date">
                            @if($errors->has('publish_date'))
                                <div class="invalid-feedback">{{ $errors->first('publish_date') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <div>
                                <iframe width="1029" height="579" src="https://www.youtube.com/embed/{{ $video->embed }}" title="Հուշապատում՝ նվիրված հայ մեծանուն կոմպոզիտոր Ալ. Սպենդիարյանի 150-ամյակին" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                            <label for="embed" class="form-lable">Տեսահոլովալի embed</label>
                            <input value="{{ $video->embed }}" placeholder="Վերնագիրը անգլերեն" type="text" class="form-control @if($errors->has('embed')) is-invalid @endif" id="embed" name="embed">
                            @if($errors->has('embed'))
                                <div class="invalid-feedback">{{ $errors->first('embed') }}</div>
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

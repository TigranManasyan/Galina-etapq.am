@extends('admin.layouts.app')
@section('title') {{ $book->name }} խմբագրում @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Ձեռնարիկի խմբագրում</h5>
                </div>

                <div class="card-body p-2">
                    <form id="update-library" action="{{ route('admin.library.update') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="department" class="form-lable">Ամբիոն</label>
                            <select name="department" id="department" class="form-control">
                                <option selected disabled>-- Ընտրեք ցանկից --</option>
                                <option @if($book->department == 'Տեղեկատվական Տեխնոլոգիաներ') selected @endif value="Տեղեկատվական Տեխնոլոգիաներ">Տեղեկատվական Տեխնոլոգիաներ</option>
                                <option @if($book->department == 'Սպասարկում') selected @endif value="Սպասարկում">Սպասարկում</option>
                                <option @if($book->department == 'Հագուստի Մոդելավորում') selected @endif value="Հագուստի Մոդելավորում">Հագուստի Մոդելավորում</option>
                                <option @if($book->department == 'ՀՊՏ') selected @endif value="ՀՊՏ">ՀՊՏ</option>
                                <option @if($book->department == 'Հանրակրթական') selected @endif value="Հանրակրթական">Հանրակրթական</option>
                            </select>
                            @if($errors->has('department'))
                                <div class="invalid-feedback">{{ $errors->first('department') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name" class="form-lable">Ձեռնարկի անվանումը</label>
                            <input type="text" id="name" class="form-control @if($errors->has('name'))in-valid @endif"  name="name" value="{{ $book->name }}">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="author" class="form-lable">Ձեռնարկի հեղինակ</label>
                            <input type="text" id="author" class="form-control @if($errors->has('author'))in-valid @endif" placeholder="Ձեռնարկի անվանումը" name="author" value="{{ $book->author }}">
                            @if($errors->has('author'))
                                <div class="invalid-feedback">{{ $errors->first('author') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="year" class="form-lable">Տարեթիվ</label>
                            <input type="text" maxlength="4" min="4" id="year" class="form-control @if($errors->has('year'))in-valid @endif" placeholder="Տարեթիվ" name="year" value="{{ $book->year }}">
                            @if($errors->has('year'))
                                <div class="invalid-feedback">{{ $errors->first('year') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="book" class="input-group">Ընտրել ձեռնարկը (pdf)</label>
                            <input type="file" id="book" class="form-control @if($errors->has('book'))in-valid @endif" name="book" value="{{ $book->path }}">
                            @if($errors->has('book'))
                                <div class="invalid-feedback">{{ $errors->first('book') }}</div>
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

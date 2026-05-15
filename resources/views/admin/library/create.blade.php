@extends('admin.layouts.app')
@section('title') Ձեռնարկի գրանցում @endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Ձեռնարիկի ավելացում</h5>
                </div>

                <div class="card-body p-2">
                    <form id="save-library" action="{{ route('admin.library.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="department_hy" class="form-lable">Ամբիոն (հայերենով)<sup style="color:red;font-weight: bold;">*</sup></label>
                            <select name="department_hy" id="department_hy" class="form-control @if($errors->has('department_hy'))is-invalid @endif">
                                <option selected disabled>-- Ընտրեք ցանկից --</option>
                                <option value="Տեղեկատվական Տեխնոլոգիաներ">Տեղեկատվական Տեխնոլոգիաներ</option>
                                <option value="Սպասարկում">Սպասարկում</option>
                                <option value="Հագուստի Մոդելավորում">Հագուստի Մոդելավորում</option>
                                <option value="ՀՊՏ">ՀՊՏ</option>
                                <option value="Հանրակրթական">Հանրակրթական</option>
                            </select>
                            @if($errors->has('department_hy'))
                                <div class="invalid-feedback">{{ $errors->first('department_hy') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="department_en" class="form-lable">Ամբիոն (անգլերենով)<sup style="color:red;font-weight: bold;">*</sup></label>
                            <select name="department_en" id="department_en" class="form-control @if($errors->has('department_en'))is-invalid @endif">
                                <option selected disabled>-- Ընտրեք ցանկից --</option>
                                <option value="Innovation Technologies">Innovation Technologies</option>
                                <option value="Management">Management</option>
                                <option value="Clothing modeling and design">Clothing modeling and design</option>
                                <option value="Clothing manufacturing technology">Clothing manufacturing technology</option>
                                <option value="Productivity">Productivity</option>
                            </select>
                            @if($errors->has('department_en'))
                                <div class="invalid-feedback">{{ $errors->first('department_en') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="name" class="form-lable">Ձեռնարկի անվանումը<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input type="text" id="name" class="form-control @if($errors->has('name'))is-invalid @endif" placeholder="Ձեռնարկի անվանումը" name="name" value="{{ old('name') }}">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="author" class="form-lable">Ձեռնարկի հեղինակ<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input type="text" id="author" class="form-control @if($errors->has('author'))is-invalid @endif" placeholder="Ձեռնարկի անվանումը" name="author" value="{{ old('author') }}">
                            @if($errors->has('author'))
                                <div class="invalid-feedback">{{ $errors->first('author') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="year" class="form-lable">Տարեթիվ<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input type="text" maxlength="4" min="4" id="year" class="form-control @if($errors->has('year'))is-invalid @endif" placeholder="Տարեթիվ" name="year" value="{{ old('year') }}">
                            @if($errors->has('year'))
                                <div class="invalid-feedback">{{ $errors->first('year') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="book" class="input-group">Ընտրել ձեռնարկը (pdf)<sup style="color:red;font-weight: bold;">*</sup></label>
                            <input type="file" id="book" class="form-control @if($errors->has('book'))is-invalid @endif" name="book" value="{{ old('book') }}">
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

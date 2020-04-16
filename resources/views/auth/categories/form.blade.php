@extends('layouts.app')

@isset($category)
    @section('title', 'Редактировать Категорию')
@else
    @section('title', 'Добавить Категорию')
@endisset

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-12">
            @isset($category)
                <h1>Редактировать Категорию <b>{{ $category->name }}</b></h1>
            @else
                <h1>Добавить Категорию</h1>
            @endisset

            <form method="POST" class="form-horizontal" enctype="multipart/form-data"
                  @isset($category)
                  action="{{ route('categories.update', $category) }}"
                  @else
                  action="{{ route('categories.store') }}"
                @endisset>
                <div>
                    @isset($category)
                        @method('PUT')
                    @endisset
                    @csrf
                    <div class="form-group">
                        <label for="code" class="col-sm-2 col-form-label">Код: </label>
                        <div class="col-sm-6">
                            @error('code')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control" name="code" id="code"
                                   value="{{ old('code', isset($category) ? $category->code : null) }}">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="name" class="col-sm-2 col-form-label">Название: </label>
                        <div class="col-sm-6">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <input type="text" class="form-control" name="name" id="name"
                                   value="@isset($category){{ $category->name }}@endisset">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="logo" class="col-sm-2 col-form-label">Картинка: </label>
                        <div class="col-sm-2">
                            <label class=" btn-file">
                                Загрузить <input type="file" style="display: none;" name="logo" id="logo">
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-5">
                            <button class="btn btn-success">Сохранить</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </div>
@endsection

@extends('layouts.app')

@isset($product)
    @section('title', 'Редактировать Товар')
@else
    @section('title', 'Добавить Товар')
@endisset

@section('content')
    <div class="col-md-12">
        @isset($product)
            <h1>Редактировать Товар <b>{{ $product->name }}</b></h1>
        @else
            <h1>Добавить Товар</h1>
        @endisset

        <form method="POST" class="form-horizontal" enctype="multipart/form-data"
              @isset($product)
              action="{{ route('products.update', $product) }}"
              @else
              action="{{ route('products.store') }}"
            @endisset>
            <div>
                @isset($product)
                    @method('PUT')
                @endisset
                @csrf
                <div class="form-group">
                    <label for="name" class="col-sm-2 col-form-label">Название: </label>
                    <div class="col-sm-6">
                        @error('code')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <input type="text" class="form-control" name="name" id="name"
                               value=" {{ old('name', isset($product) ? $product->name : null)}}">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="category_id" class="col-sm-2 col-form-label">Категория: </label>
                    <div class="col-sm-6">
                        <select name="category_id" id="category_id" class="form-control">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"
                                        @isset($product)
                                        @if($product->category->id == $category->id)
                                        selected
                                    @endif
                                    @endisset>{{$category->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="about" class="col-sm-2 col-form-label">Описание: </label>
                    <div class="col-sm-6">
                                        <textarea name="about" id="about" cols="72"
                                                  rows="7">@isset($product){{ $product->about }}@endisset</textarea>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="image" class="col-sm-2 col-form-label">Картинка: </label>
                    <div class="col-sm-2">
                        <label class="btn btn-default btn-file">
                            Загрузить <input type="file" style="display: none;" name="image" id="image">
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price" class="col-sm-2 col-form-label">Цена: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="price" id="price"
                               value="@isset($product){{ $product->price }}@endisset">
                    </div>
                </div>
                <div class="form-group">
                    <label for="count" class="col-sm-2 col-form-label">Количество: </label>
                    <div class="col-sm-3">
                        <input type="text" class="form-control" name="count" id="count"
                               value="@isset($product){{ $product->count }}@endisset">
                    </div>
                </div>
                    <div class="col-sm-6">
                        <button class="btn btn-success">Сохранить</button>
                    </div>
            </div>
        </form>
    </div>


@endsection

@extends('layouts.default')
@section('title', 'Главная')
@section('main' , 'active')


@section('content')
    <div class="container">
        <h1 class="mt-5 text-center">Все товары</h1>
        <form method="GET">
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <label for="price_from">Цена от
                        <input type="text" name="price_from" id="price-from" size="6" value="{{request()->price_from}}">
                    </label>
                    <label for="price_to">до
                        <input type="text" name="price_to" id="price_to" size="6" value="{{request()->price_to}}">
                    </label>
                </div>
                <div class="col-sm-6 col-md-3 navbar-right">
                    <button type="submit" class="btn btn-primary">Фильтровать</button>
                    <a href="{{route('index')}}" class="btn btn-danger">Сброс</a>
                </div>
            </div>
        </form>
        <div class="row">
            @foreach($products as $product)
                    @include('products', compact('products'))
            @endforeach
        </div>
        {{$products->links()}}
    </div>
@endsection


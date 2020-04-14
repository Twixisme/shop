@extends('layouts.default')
@section('title', 'Главная')
@section('main' , 'active')


@section('content')
    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1 class="mt-5">Главная страница сайта</h1>
            <p class="lead"><span>Content.</span>.</p>
            <form method="GET">
                <div class="filers row">
                    <div class="col-sm-6 col-md-3">
                        <label for="price_from">Цена от
                            <input type="text" name="price_from" id="price-from" size="6" value="{{request()->price_from}}">
                        </label>
                        <label for="price_to">Цена до
                            <input type="text" name="price_to" id="price_to" size="6" value="{{request()->price_to}}">
                        </label>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <button type="submit" class="bth bth-primary">Фильтровать</button>
                        <a href="{{route('index')}}" class="btn btn-danger">Сброс</a>
                    </div>
                </div>
            </form>
            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        @include('products', compact('products'))
                    </div>
                @endforeach
            </div>
            {{$products->links()}}
        </div>
    </main>
@endsection


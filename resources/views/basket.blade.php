@extends('layouts.default')
@section('title', 'Корзина')

@section('content')
    <div class="container">

        <h1>Корзина</h1>
        <p>Оформление заказа</p>
        <div class="panel">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Изображение</th>
                    <th>Название</th>
                    <th>Кол-во</th>
                    <th>Цена</th>
                    <th>Стоимость</th>
                </tr>
                </thead>
                <tbody>
                @foreach($order->products as $product)
                    <tr>
                        <td>
                            <div class="img-div">
                                <img src="{{Storage::url($product->image)}}" height="50px">
                            </div>
                        </td>
                        <td>
                            <h4 href="{{route('product', [$product->categories])}}">{{$product->name}}</h4>
                        </td>
                        <td><span class="badge">{{$product->pivot->count}}</span>
                            <div class="btn-group form-inline">
                                <form action="{{route('remove', $product)}}" method="POST">
                                    <button type="submit" class="btn btn-danger" href=""><span
                                            class="glyphicon glyphicon-minus" aria-hidden="true"></span></button>
                                    <input type="hidden" name="_token" value="b3pWmFZfPOTx5zFo8bwnaJFEuPeVi5IvijXD9IJI">
                                    @csrf
                                </form>
                                <form action="{{route('add', $product)}}" method="POST">
                                    <button type="submit" class="btn btn-success" href=""><span
                                            class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                                    <input type="hidden" name="_token" value="b3pWmFZfPOTx5zFo8bwnaJFEuPeVi5IvijXD9IJI">
                                    @csrf
                                </form>
                            </div>
                        </td>
                        <td>{{$product->price}}</td>
                        <td>{{$product->getPrice()}}USD</td>
                    </tr>
                @endforeach
                <td>Общая стоимость</td>
                <td>{{$order->calc()}}</td>
                </tbody>
            </table>
            <br>
            <div class="btn-group pull-right" role="group">
                <a type="button" class="btn btn-success" href="{{route('place')}}">Оформить заказ</a>
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <h1>Корзина</h1>
            <div class="d-block">
                <div class="img-div">
                    <img src="{{Storage::url($product->image)}}" height="100px">
                    <h4>{{$product->name}}</h4>
                </div>
            </div>

        </div>
    </div>
@endsection


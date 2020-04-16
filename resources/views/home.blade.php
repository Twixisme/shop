@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h1>Заказы</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>#</td>
                                <td>Имя</td>
                                <td>Номер телефона</td>
                                <td>Когда отправлен</td>
                                <td>Сумма</td>
                                <td>Действия</td>
                            </tr>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->name}}</td>
                                <td>{{$order->phone}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->calc()}}</td>
                                <td>
                                    <div class="btn-group" role="group">
                                        <a class="btn-success btn" type="button"
                                        @if(Auth::user()->isAdmin())
                                            href="{{route('orders.show', $order)}}"
                                        @else
                                            href="{{route('person.orders.show', $order)}}"
                                        @endif
                                        >Открыть</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

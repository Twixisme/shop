@extends('layouts.default')
@section('title', 'Оформить заказ')

@section('content')
    <div class="container">
        <div class="starter-template">
            <h1>Подтвердите заказ:</h1>
            <div class="col-md-offset-3 col-md-6">
                <p>Общая стоимость: <b>{{$order->calc()}} USD.</b></p>
                <form class="form-horizontal" action="{{route('confirm')}}" method="POST">
                    <div class="col-md-12">
                        <p>Укажите свои имя и номер телефона, чтобы наш менеджер мог с вами связаться:</p>
                        <div class="form-group">
                            <input type="name" name="name" id="name"
                                   class="form-control @error('name') is-invalid @enderror " required
                                   autocomplete="name" autofocus placeholder="Ваше имя">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="phone" name="phone" id="phone"
                                   class="form-control @error('phone') is-invalid @enderror" required
                                   autocomplete="phone" autofocus placeholder="Номер телефона">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" id="email" value=""
                                   class="form-control @error('email') is-invalid @enderror " required
                                   autocomplete="email" autofocus placeholder="E-mail">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                            <i class="fa fa-user"></i>
                        </div>
                    </div>
                    <input type="hidden" name="_token" value="b3pWmFZfPOTx5zFo8bwnaJFEuPeVi5IvijXD9IJI">
                    <div class="col-md-8">
                        <input type="submit" class="btn btn-success" value="Подтвердите заказ">
                    </div>
                    @csrf
                </form>
            </div>
        </div>
    </div>
@endsection

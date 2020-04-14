@extends('layouts.default')
@section('title', 'Users')

@section('content')
<div class="container">
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Возвраст</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{ $loop->iteration  }}</th>
                    <td>{{ $user['name']}}</td>
                    <td>{{ $user['surname']}}</td>
                    <td>{{ $user['age']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
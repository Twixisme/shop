@extends('layouts.app')

@section('title', 'Категория ' )

@section('content')
<div class="container">
    <div class="col-md-12">
        <h1>Категория </h1>
        <table class="table">
            <tbody>
            <tr>
                <th>
                    Поле
                </th>
                <th>
                    Значение
                </th>
            </tr>
            <tr>
                <td>ID</td>
                <td>{{ $category->id }}</td>
            </tr>
            <tr>
                <td>Код</td>
                <td>{{ $category->code }}</td>
            </tr>
            <tr>
                <td>Название</td>
                <td>{{ $category->name }}</td>
            </tr>
            <tr>
                <td>Logo</td>
                <td><img src="{{ Storage::url($category->logo)}}" height="240px"></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
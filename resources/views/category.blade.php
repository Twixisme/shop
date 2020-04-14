@extends('layouts.default')
@section('title', '')

@section('content')
<div class="container">
    <div class="align-items-center">
		<img src="{{Storage::url($category->logo)}}" height="240px">
        <h1>{{$category->name}}</h1>
    </div>
    <div class="d-flex card-deck mb-3 text-center">
        @foreach($category->products as $product)
            @include('products', compact('products'))
        @endforeach
    </div>
</div>
@endsection

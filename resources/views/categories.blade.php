@extends('layouts.default')
@section('title', 'Все категории')

@section('content')
    <div class="conteiner">
    	<div class="links  d-flex justify-content-center">
    		<div class="d-flex card-deck mb-3 text-center">
    		@foreach($categories as $category)
    			<div class="col-md-4">
        			<div class="card-header">
                        <a href="/{{$category->code}}">
                            <img src="{{Storage::url($category->logo)}}" height="240px">
    					<h2>{{$category->name}}</h2></a>
    	    		</div>
    			</div>
			@endforeach
    		</div>
    	</div>
	</div>
@endsection

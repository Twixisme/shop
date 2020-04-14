<div class="card mb-4 shadow-sm ">
    <div class="card-header">
        <h4 class="my-0 font-weight-normal">{{ $product->name}}</h4>
    </div>
    <div class="card-body">
        <h1 class="card-title pricing-card-title">{{ $product->price}}USD</h1>
        <div class="list-unstyled mt-3 mb-4">
            <div>{{$product->about}}</div>
            <div>{{$product->model}}</div>
            <div>{{$product->availability}}</div>
            <div>{{$product->category->name}}</div>
        </div>
        <form action="{{route('add', $product->id)}}" method="POST">
            <button type="submit" class="btn btn-lg btn-block btn-outline-primary" role="button">Buy</button>
            @csrf
        </form>
    </div>
</div>




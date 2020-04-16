<div class="col-sm-6 col-md-4 text-center">
    <div class="thumbnail">
        <div class="img-div">
            <img src="{{Storage::url($product->image)}}" height="240px">
        </div>
        <div class="card-header">
            <h3 class="my-0 font-weight-normal">{{ $product->name}}</h3>
        </div>
        <div class="caption">
            <p class="card-title pricing-card-title">{{ $product->price}}USD</p>
            <div class="list-unstyled mt-3 mb-4">
                <div>{{$product->about}}</div>
                <div>{{$product->model}}</div>
                <div>{{$product->availability}}</div>
            </div>
            <form action="{{route('add', $product->id)}}" method="POST">
                @if($product->isAvailable())
                    <button type="submit" class="btn btn-primary" role="button">Купить</button>
                @else
                    <h4>
                        Нет в начилии
                    </h4>

                @endif
                @csrf
            </form>
        </div>
    </div>
</div>




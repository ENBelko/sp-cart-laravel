@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection

@section('content')
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="card mt-5">
                        <div class="card-header">{{ $product->title}}</div>
                        <img class="card-img-top"
                             src="{{ $product->imagePath }}"
                             alt=""
                        >
                        <div class="card-body">
                            <p class="card-text">{{ $product->description }}</p>

                        </div>
                        <div class="card-footer">
                            <div class="float-left price btn-success">${{ $product->price }}</div>
                            <a href="{{ route('product.addToCart', ['id' => $product->id]) }}"
                               class="btn btn-primary float-right">add to cart</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection
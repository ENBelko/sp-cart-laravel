@extends('layouts.app')

@section('title')
    Shopping Cart
@endsection

@section('content')
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge badge-secondary">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['title'] }}</strong>
                            <span class="badge badge-success">{{ $product['price'] }}</span>

                        </li>

                    @endforeach
                </ul>
                <div class=" dropdown">
                    <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Action
                        <span class="carret"></span></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="">Reduce by 1</a>
                        <a class="dropdown-item" href="">Reduce All</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">
                <strong>Total: {{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">
                <button type="button" class="btn btn-success">Checkout</button>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 offset-md-3 offset-sm-3">
                <h2>Not item in Cart</h2>
            </div>
        </div>
    @endif
@endsection
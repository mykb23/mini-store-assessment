@extends('layouts.app')

@section('content')
@if(Session::has('message'))
<div class="col-10 offset-1 mt-3">
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
</div>
@endif
<div class="row mt-5">
    
    @foreach ($allProducts as $product)
        <div class="col-md-3">
            <div class="card">
                <img class="image" src="{{ $product->image }}" alt="{{$product->name}}">
                <h1 class="title">{{$product->name}}</h1>
                <p class="price ">{{$product->price}} {{$product->currency}}</p>
                <p><a class="add-cart-button" type="button" href="{{ route('cart.add', $product->id) }}">Add to cart</a></p>
            </div>
        </div>
        @endforeach
    </div>
    <div class="float-right">
        {{ $allProducts->links()}}
    </div>
@endsection
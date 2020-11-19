@extends('layouts.app')

@section('content')
        <h2 class="mt-5">CART</h2>
    <div class="row">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Action</th>
                        <th>SubTotal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cartItems as $item)
                        <tr>
                            <td scope="row">
                                <h4>
                                    {{ $item->name }} 
                                </h4>
                            </td>
                            <td>
                                <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="input-group">
                                        <input name="quantity" type="number" value="{{ $item->quantity }}" />
                                        <div class="input-group-append">
                                            <button class="btn btn-primary btn-sm" type="submit">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('cart.destroy', $item->id) }}" >Remove</a>
                            </td>
                            <td>
                                {{ \Cart::get($item->id)->getPriceSum() }} 
                                <span>
                                    {{$item->attributes->currency}}
                                </span>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
            </table>
            <h3>
                @if(\Cart::getTotal() != 0)
                Total Price :  {{\Cart::getTotal()}} 
                @endif
            </h3>
        </div>
        @if(\Cart::getTotal() != 0)
        <div class="col-md-4">
            <form  action="{{ route('product.storeDetails') }}" method="post">
                @csrf
                @method('POST')
                <div class="form-group">
                    <input type="text"
                    class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Enter Name" required>
                </div>
                <button type="submit" class="btn btn-primary" href="{{ route('product.storeDetails') }}" role="button">Pay</button>
            </form>
        </div>
        @endif
    </div>
@endsection

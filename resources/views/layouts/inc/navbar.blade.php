<nav class="navbar navbar-expand navbar-dark bg-dark fixed-top">
    <div class="nav navbar-nav">
        <a class="nav-item nav-link active" href="{{route('product.index')}}">Home</a>
        <a class="nav-item nav-link" href="{{ route('cart.index') }}">Cart
            @if(\Cart::getContent()->count() !== 0)
                {{\Cart::getContent()->count()}}
            @endif
        </a>
    </div>
</nav>
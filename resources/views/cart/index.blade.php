
    
    @extends('components.layout')
    @section('content')
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <h1>Your Cart</h1>

        @if(count($cartItems) > 0)
            <ul>
                @foreach($cartItems as $item)
                    <li>{{ $item['product_id'] }} - Quantity: {{ $item['quantity'] }}</li>
                @endforeach
            </ul>
        @else
            <p>Your cart is empty.</p>
        @endif

        <a href="{{ route('home') }}">Continue Shopping</a>
    @endsection





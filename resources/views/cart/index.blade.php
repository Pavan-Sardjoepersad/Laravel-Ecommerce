<x-layout>
    
    @foreach ($cartItems as $cartItem)
        <p>{{$cartItem->id}}</p>
    @endforeach



</x-layout>
@extends('layout')

@section('shopping-cart')
    @if(Session::has('cart'))
        @foreach($products as $product)

        <div class="cart-prod-container">
            <img src="img/{{ $product['ID'] }}.jpg">
            <p class="cart-prod-name">{{ $product['Name'] }}</p>
            <p class="cart-prod-qty">{{ $product['Quantity'] }}</p>
            <p class="cart-prod-price">€{{ $product['Price'] }}</p>
        </div>
        <br>


        @endforeach

    @else
    <h2>U heeft nog niks in uw Shopping Cart.</h2>
    @endif

@endsection
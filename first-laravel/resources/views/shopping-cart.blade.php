@extends('layout')

@section('shopping-cart')

    <div id="cart-container-container">
        @if(Session::has('cart'))
            @foreach($products as $product)

            <div class="cart-prod-container">

                <img src="img/{{ $product['ID'] }}.jpg">
                <p class="cart-prod-name">{{ $product['Name'] }}</p>
                <p class="cart-prod-qty">{{ $product['Quantity'] }}</p>
                <p class="cart-prod-price">€{{ $product['Price'] }}</p>
                @if($product['Quantity'] > 0)
                <p class="cart-prod-price2">€{{ $product['Price'] / $product['Quantity'] }} per stuk</p>
                @endif
                <form id="min-qty" method="get" action="{{ route('shoppingcart.remove', $product['ID']) }}">
                    <input id="min" type="submit" name="amount" value="-"></input>
                </form>

                <form id="add-qty" method="get" action="{{ route('shoppingcart.add', $product['ID']) }}">
                    <input id="add" type="submit" name="amount" value="+"></input>
                </form>

                <form id="remove-prod" method="get" action="{{ route('shoppingcart.remove', $product['ID']) }}">
                    <input id="remove" type="submit" name="amount" value="X"></input>
                </form>

            </div>
            <br>
            @endforeach

            <div id="cart-total-container">
                <p id="cart-ttl-name">Totaalbedrag:</p>
                <p id="cart-ttl-price">€{{ $totalPrice }}</p>
                <p id="cart-amount-name">Aantal producten:</p>
                <p id="cart-amount-qty">{{ $totalQuantity }}</p>
            </div>
    </div>

    @else
    <h2>Uw Shopping Cart is leeg.</h2>
    <div id="cart-total-container">
                <p id="cart-ttl-name">Totaalbedrag:</p>
                <p id="cart-ttl-price">€0</p>
                <p id="cart-amount-name">Aantal producten:</p>
                <p id="cart-amount-qty">0</p>
            </div>
    @endif

@endsection
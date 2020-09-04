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
                <p class="cart-prod-price2">€{{ $product['Price'] / $product['Quantity'] }} per stuk</p>

                <form id="min-qty" method="get" action="{{ route('shoppingcart.remove', $product['ID']) }}">
                    <input id="min" type="submit" name="amount" value="-"></input>
                </form>

                <form id="add-qty" method="get" action="{{ route('shoppingcart.add', $product['ID']) }}">
                    <input id="add" type="submit" name="amount" value="+"></input>
                </form>

            </div>
            <br>


            @endforeach

    </div>

    <div id="cart-total-container">
                <p id="cart-ttl-name">Totaalbedrag:</p>
                <p id="cart-ttl-price">€{{ $totalPrice }}</p>
                <p id="cart-amount-name">Aantal producten:</p>
                <p id="cart-amount-qty">{{ $totalQuantity }}</p>
            </div>

    @else
    <h2>U heeft nog niks in uw Shopping Cart.</h2>
    @endif

@endsection
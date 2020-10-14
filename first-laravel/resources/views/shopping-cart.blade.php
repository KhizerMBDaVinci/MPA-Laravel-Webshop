@extends('layouts.app')

@section('shopping-cart')

@php $cart = Session::get('cart'); @endphp

@if(Session::has('cart'))
<link type="text/css" href="{{ asset('Myapp.scss') }}" rel="stylesheet">
    <div id="cart-container-container">
        @if($cart->getQuantity() > 0)
                @foreach($products as $product)
                <div class="cart-prod-container">

                    <img src="{{ asset('img/'.$product['imageNr']) }}.jpg">
                    <p class="cart-prod-name">{{ $product['name'] }}</p>
                    <p class="cart-prod-qty">{{ $product['quantity'] }}</p>
                    <p class="cart-prod-price">€{{ $product['price'] }}</p>
                    @if($product['quantity'] > 0)
                    <p class="cart-prod-price2">€{{ $product['price'] / $product['quantity'] }} per stuk</p>
                    @endif
                    <form id="min-qty" method="get" action="{{ route('shoppingcart.remove', $product['id']) }}">
                        <input id="min" type="submit" name="text" value="-"></input>
                        <input type="hidden" name="amount" value="1"></input>
                        <input type="hidden" value="toCart" name="type">
                    </form>

                    <form id="add-qty" method="get" action="{{ route('shoppingcart.add', $product['id']) }}">
                        <input id="add" type="submit" name="amount" value="+"></input>
                        <input type="hidden" name="amount" value="1"></input>
                        <input type="hidden" value="toCart" name="type">
                    </form>

                    <form id="remove-prod" method="get" action="{{ route('shoppingcart.remove', $product['id']) }}">
                        <input id="remove" type="submit" name="text" value="X"></input>
                        <input type="hidden" name="amount" value="0"></input>
                        <input type="hidden" value="toCart" name="type">
                    </form>

                </div>
                <br>
                @endforeach

                <div id="cart-total-container">
                    <p id="cart-ttl-name">Totaalbedrag:</p>
                    <p id="cart-ttl-price">€{{ $totalPrice }}</p>
                    <a href="{{ route('ordercontroller.customerform') }}"><button id="order-link">Bestellen</button></a>
                    <p id="cart-amount-name">Aantal producten:</p>
                    <p id="cart-amount-qty">{{ $totalQuantity }}</p>
                </div>
        @endif
    </div>

        @if($cart->getQuantity() < 1)
        
            <h2 class="empty-cart-title">Uw Shopping Cart is leeg.</h2>
                <div id="cart-total-container">
                    <p id="cart-ttl-name">Totaalbedrag:</p>
                    <p id="cart-ttl-price">€0</p>
                    <p id="cart-amount-name">Aantal producten:</p>
                    <p id="cart-amount-qty">0</p>
                </div>
        @endif
    
    @else
    
    <h2 class="empty-cart-title">Uw Shopping Cart is leeg.</h2>
                <div id="cart-total-container">
                    <p id="cart-ttl-name">Totaalbedrag:</p>
                    <p id="cart-ttl-price">€0</p>
                    <p id="cart-amount-name">Aantal producten:</p>
                    <p id="cart-amount-qty">0</p>
                </div>
    @endif

@endsection
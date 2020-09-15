@extends('layouts.app')

@section('products')

<div class="mycontainer">

    <h2>De Bruyne & Adriaansen Markt</h2>
        <p>Dit is de online webshop waar je alle lekkere eten en drinken kunt bestellen</p>
        
    @foreach($products as $product)
    <a href="{{ route('details') }}?id={{ $product->ID }}">
        <div class="product-container">
            <img src=" img/{{ $product->ID }}.jpg"></img>
            <p>{{ $product->Naam }}</p>
            <form class="homeadd" method="get" action="{{ route('shoppingcart.add', $product->ID) }}">
                <input value="+" type="submit" id="shopping-cart">
                <input type="hidden" value="Toevoegen" id="amount" name="amount" type="number" min="1">
            </form>
        </div>
    </a>
    @endforeach

</div>

@endsection
@extends('layouts.app')

@section('products')

<div class="mycontainer">

    <h2>De Bruyne & Adriaansen Markt</h2>
        <p>Dit is de online webshop waar je alle lekkere eten en drinken kunt bestellen</p>
    @foreach($products as $product)
    <a href="{{ route('details', $product->id) }}">
        <div class="product-container">
            <img src="{{ asset('img/'.$product->image_nr) }}.jpg"></img>
            <p>{{ $product->name }}</p>
            <form class="homeadd" method="get" action="{{ route('shoppingcart.add', $product->id) }}">
                <input value="+" type="submit" id="shopping-cart"></input>
                <input type="hidden" value="1" name="amount">
                <input type="hidden" value="Toevoegen" name="type">
            </form>
        </div>
    </a>
    @endforeach

</div>

@endsection
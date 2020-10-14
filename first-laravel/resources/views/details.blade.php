@extends('layouts.app')

@section('details')
<form id="amount" method="get" action="{{ route('shoppingcart.add', $product->id) }}">
    <div id="detail-container">

        <h2 id="prod-naam">{{ $product->name }}</h2>

        <p id="prod-beschrijving">{{ $product->description }}</p>
        <p id="prod-prijs">€{{ $product->price }}</p>

        <img id="prod-afbeelding" src="{{ asset('img/'.$product->image_nr) }}.jpg">
        

        <p id="shopping-cart-text">Toevoegen aan winkelwagen</p>
        <input value="+" type="submit" class="shopping-cart">

        <p id="amountext">Aantal</p>

        <input id="amount" value="1" name="amount" type="number" min="1">
                <input type="hidden" value="toCart" name="type">
    
    </div>
</form>
@endsection
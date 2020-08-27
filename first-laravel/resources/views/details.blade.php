@extends('layout')

@section('details')

<div id="detail-container">

    <h2 id="prod-naam">{{ $product[0]->Naam }}</h2>

    <p id="prod-beschrijving">{{ $product[0]->Beschrijving }}</p>
    <p id="prod-prijs">€{{ $product[0]->Prijs }}</p>
        
    <img id="prod-afbeelding" src="img/{{ $product[0]->ID }}.jpg">
    

    <p id="shopping-cart-text">Toevoegen aan winkelwagen</p>
    <a id="shopping-cart" href="{{ route('shoppingcart.add', $product[0]->ID) }}"><img src="img/shopping-cart.jpg"></a>

</div>

@endsection
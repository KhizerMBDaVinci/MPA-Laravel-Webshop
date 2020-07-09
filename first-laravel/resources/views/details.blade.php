@extends('layout')

@section('details')

<div id="detail-container">

    <h2 id="prod-naam">{{ $product[0]->Naam }}</h2>

    <p id="prod-beschrijving">{{ $product[0]->Beschrijving }}</p>
    <p id="prod-prijs">€{{ $product[0]->Prijs }}</p>
        
    <img id="prod-afbeelding" src="img/{{ $product[0]->ID }}.jpg">
    

    <p id="shopping-cart-text">Toevoegen aan winkelwagen</p>
    <a id="shopping-cart"><img src="img/shopping-cart.jpg"></a>
    <p id="amountext">Aantal</p>
    <input type="number" id="amount" step="1" min="1">
</div>

@endsection
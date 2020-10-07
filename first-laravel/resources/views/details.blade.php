@extends('layouts.app')

@section('details')
<form id="amount" method="get" action="{{ route('shoppingcart.add', $product[0]->ID) }}">
    <div id="detail-container">
    
        <h2 id="prod-naam">{{ $product[0]->Naam }}</h2>

        <p id="prod-beschrijving">{{ $product[0]->Beschrijving }}</p>
        <p id="prod-prijs">€{{ $product[0]->Prijs }}</p>
            
        <img id="prod-afbeelding" src="img/{{ $product[0]->Image_Nr }}.jpg">
        

        <p id="shopping-cart-text">Toevoegen aan winkelwagen</p>
        <input value="+" type="submit" class="shopping-cart">

        <p id="amountext">Aantal</p>

        <input id="amount" value="1" name="amount" type="number" min="1">
                <input type="hidden" value="toCart" name="type">
    
    </div>
</form>
@endsection
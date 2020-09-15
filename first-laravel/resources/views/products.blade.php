@extends('layouts.app')

@section('products')

<div class="mycontainer">

    <h2>De Bruyne & Adriaansen Markt</h2>

        <p>{{ $category[0]->Beschrijving}}</p>
        
    @foreach($products as $product)
    <a href="{{ route('details') }}?id={{ $product->ID }}">
        <div class="product-container">
            <img src=" img/{{ $product->ID }}.jpg"></img>
            <p>{{ $product->Naam }}</p>
            <form class="homeadd" method="get" action="{{ route('shoppingcart.add', $product->ID) }}">
                <input value="+" type="submit" id="shopping-cart">
                <input type="hidden" value="ToevoegenC" id="amount" name="amount" type="number" min="1">
            </form>
        </div>
    </a>
    @endforeach

</div>

@endsection


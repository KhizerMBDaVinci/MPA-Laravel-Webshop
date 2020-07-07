@extends('layout')
@section('navbar')
    @include('navigation-menu')
@endsection

@section('products')

<div class="container">

    <h2>De Bruyne & Adriaansen Markt</h2>
        <p>Dit is de online webshop waar vandaan je alle lekkere eten kunt bestellen</p>
        
    @foreach($products as $product)
    <div class="product-container">
        <img src=" img/{{ $product->ID }}.jpg"></img>
        <p>{{ $product->Naam }}</p>
    </div>
    @endforeach

</div>

@endsection
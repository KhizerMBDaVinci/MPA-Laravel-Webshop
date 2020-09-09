@extends('layout')

@section('products')

<div class="container">

    <h2>De Bruyne & Adriaansen Markt</h2>

        <p>{{ $category[0]->Beschrijving}}</p>
        
    @foreach($products as $product)
    <a href="/details?id={{ $product->ID }}">
        <div class="product-container">
            <img src=" img/{{ $product->ID }}.jpg"></img>
            <p>{{ $product->Naam }}</p>
        </div>
    </a>
    @endforeach

</div>

@endsection


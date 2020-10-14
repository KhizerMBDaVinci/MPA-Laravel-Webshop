@extends('layouts.app')

@section('products')

<div class="mycontainer">

    <h2>De Bruyne & Adriaansen Markt</h2>

        <p>{{ $category->Beschrijving}}</p>
        
    @foreach($products as $product)
    <a href="{{ route('details', $product->id) }}">
        <div class="product-container">
            <img src="{{ asset('img/'.$product->image_nr) }}.jpg"></img>
            <p>{{ $product->name }}</p>
            <form class="homeadd" method="get" action="{{ route('shoppingcart.add', $product->id) }}">
                <input value="+" type="submit" id="shopping-cart"></input>
                <input type="hidden" value="1" name="amount">
                <input type="hidden" value="ToevoegenC" name="type">
            </form>
        </div>
    </a>
    @endforeach

</div>

@endsection



<div id="navigation-menu">
    <ul>
    <a href="/"><button>Home</button></a>
    @foreach($categories as $categorie)
        <a href="{{ route('category', $categorie->ID) }}"><button>{{ $categorie->Naam }}</button></a>
    @endforeach
    </ul>
</div> 

<a href="/shopping-cart"><img id="shopping-cart-btn" src="{{ asset('img/shopping-cart.jpg') }}"></a>

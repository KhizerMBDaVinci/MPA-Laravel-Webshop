
<div id="navigation-menu">
    <ul>
    <a href="/"><button>Home</button></a>
    @foreach($categories as $categorie)
        <a href="{{ route('category') }}?id={{ $categorie->ID }}"><button>{{ $categorie->Naam }}</button></a>
    @endforeach
    </ul>
</div> 

<a href="/shopping-cart"><img id="shopping-cart-btn" src="img/shopping-cart.jpg"></a>

<div id="navigation-menu">
    <ul>
    <a href="/"><button>Home</button></a>
    @foreach($categories as $categorie)
        <a href="/category?id={{ $categorie->ID }}"><button>{{ $categorie->Naam }}</button></a>
        @endforeach
    </ul>
</div> 
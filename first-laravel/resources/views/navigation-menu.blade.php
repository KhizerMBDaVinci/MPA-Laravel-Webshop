<div id="navigation-menu">
    <ul>
    <a href="/"><button>Home</button></a>
    @foreach($categories as $categorie)
        <a href="{{ $categorie->Naam }}"><button>{{ $categorie->Naam }}</button></a>
        @endforeach
    </ul>
</div> 
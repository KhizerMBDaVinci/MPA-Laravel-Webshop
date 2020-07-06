<div id="navigation-menu">
    <ul>
    @foreach($categories as $categorie)
        <button>{{ $categorie->Naam }}</button>
        @endforeach
    </ul>
</div>
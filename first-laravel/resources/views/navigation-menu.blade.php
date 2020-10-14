
<div id="navigation-menu">
    <ul>
    <a href="/"><button>Home</button></a>
    @foreach($categories as $category)
        <a href="{{ route('category', $category->id) }}"><button>{{ $category->name }}</button></a>
    @endforeach
    </ul>
</div> 

<a href="/shopping-cart"><img id="shopping-cart-btn" src="{{ asset('img/shopping-cart.jpg') }}"></a>

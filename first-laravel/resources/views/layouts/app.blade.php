<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Firma DeBruyne & Adriaansen Markt</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('Myapp.scss') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/shopping-cart.jpg') }}">
</head>
<body>
    
    <div id="app">
        <nav id="laravel-navbar" class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    @include('navigation-menu')
           

                <a href="/shopping-cart"><img id="shopping-cart-btn" src="img/shopping-cart.jpg"></a>


                    <!-- Right Side Of Navbar -->
                    <ul id="login-register-btn" class="navbar-nav mr-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login', ['categories' => $categories])}}">Inloggen</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">Registreren</a>
                                </li>
                            @endif
                        @else
                        
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('view-orders') }}">
                                        Mijn bestellingen
                                    </a>

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Uitloggen
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
                
            </div>

        </nav>

        <main class="py-4">
            @yield('content')
            @yield('products')
            @yield('details')
            @yield('shopping-cart')
            @yield('customer-form')
            @yield('complete-order')
            @yield('view-orders')
        </main>
    </div>

    <footer>
        Firma De Bruyne & Adriaansen Markt 2020 ©
    </footer>
</body>
</html>

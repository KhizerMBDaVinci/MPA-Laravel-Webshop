<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" href="{{ asset('app.scss') }}" rel="stylesheet">
        <title>Firma DeBruyne & Adriaansen Markt</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    </head>
    <body>
    <div id="page-container">
    @include('navigation-menu')
    @yield('products')
    @yield('details')
    @yield('shopping-cart')
    </div>

    <footer>
        Firma De Bruyne & Adriaansen Markt 2020 ©
    </footer>

    </body> 
</html>

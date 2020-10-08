@extends('layouts.app')

@section('complete-order')

    <p id="completext">Uw bestelling is verzonden</p>

    @if($loggedIn == 'ingelogt')
        <p id="goToOrders"><a id="gotoLink" href="{{ route('view-orders') }}">Naar bestellingoverzicht</a></p>
    @endif

@endsection
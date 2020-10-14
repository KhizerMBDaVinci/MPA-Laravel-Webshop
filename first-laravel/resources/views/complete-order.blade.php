@extends('layouts.app')

@section('complete-order')

    <p id="completext">Uw bestelling is verzonden</p>

    @if($loggedIn == 'ingelogt')
       <a id="gotoLink" href="{{ route('view-orders') }}"> <p id="goToOrders">Naar bestellingoverzicht</p></a>
    @endif

@endsection
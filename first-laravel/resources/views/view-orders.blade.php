@extends('layouts.app')

@section('view-orders')

<div id="orders-container">
    <p>Uw bestellingen</p>

    <table>
        <tr>
            <th class="theaders">Besteldatum</th>
            <th class="theaders">Totaalbedrag</th>
        </tr>
        
        @foreach($orders as $order)
        @php $date = date('d-m-y', strtotime($order->created_at)) @endphp
        <tr>
            <td class="trecords">{{ $date }}</td>
            <td class="trecords">€{{ $order->Totaal_Bedrag }}</td>
            <td><a href="{{ route('delete-order') }}?id={{ $order->ID }}"><button class="kruisje">X</button></a></td>
        </tr>
        @endforeach
    </table>

</div>

@endsection
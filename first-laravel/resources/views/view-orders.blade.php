@extends('layouts.app')

@section('view-orders')

<div id="orders-container">
    <p>Uw bestellingen</p>

    <table>
        <tr>
            <th class="theaders">ID</th>
            <th class="theaders">Besteldatum</th>
            <th class="theaders">Totaalbedrag</th>
        </tr>
        
        @foreach($orders as $order)
        @php $date = date('d-m-y', strtotime($order->created_at)) @endphp
        <tr class="ordertje">
            <td class="trecords">{{ $order->id }}</td>
            <td class="trecords">{{ $date }}</td>
            <td class="trecords">€{{ $order->total_amount }} <a href="{{ route('delete-order', $order->id) }}"><button class="kruisje">X</button></a></td>
        </tr>
        @endforeach
    </table>

</div>

@endsection
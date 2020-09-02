@extends('layout')

@section('shopping-cart')

@php
for($i = 0; $i < count($products[0]); $i++)
{
    echo $products[0][$i]['Name']."<br>";
}
@endphp

@endsection
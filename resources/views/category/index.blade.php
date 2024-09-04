@extends('components.layout')

@section('content')

<x-nav-bar />

 @foreach ($products as $product)

 <h1>{{$product->name}}</h1>

@endforeach

@endsection


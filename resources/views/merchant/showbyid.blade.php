@extends('layout')

@section('mainContent')
	<h1>Show Product</h1>

		<h1>{{$product->name}}</h1>

	<a href="{{$product->id}}/edit">Edit Car</a>

@endsection
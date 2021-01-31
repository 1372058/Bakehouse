@extends('layout')

@section('mainContent')
	<h1>Show Product</h1>

		<h1>{{$category->name}}</h1>

	<a href="{{$category->id}}/edit">Edit Category</a>

@endsection
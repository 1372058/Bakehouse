@extends('layout')

@section('title')
Product List
@endsection
@section('mainContent')
	<h1>Product List</h1>

		<div>
			<a href="/">Menu</a>
			<a >|</a>
			<a href="/product/create">Add Product</a>
		</div><br><br><br>

	<table class="center">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Category</th>				
				<th>Created At</th>
				<th>Updated At</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach($product as $product)
		<tr>		
			<td><a>{{$product->name}}</a> </td>
			<td><a>{{$product->category_name}}</a> </td>
			<td><a>{{date_format(date_create($product->created_at), 'd M Y')}}</a> </td>
			<td><a>{{date_format(date_create($product->updated_at), 'd M Y')}}</a> </td>
			<td>
				<a href="product/{{$product->id}}/edit">
					<button>
						<i>Edit</i>
					</button>
				</a>
				<form action="{{ url('product/'.$product->id) }}" method="post">
				@method('delete')
				@csrf
					<button>
						<i>Delete</i>
					</button>
				</form>
			</td>
		</tr>
		@endforeach
		</tbody>
	</table>

@endsection
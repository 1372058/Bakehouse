@extends('layout')

@section('title')
Merchant Product View
@endsection
@section('mainContent')
	<h1>Merchant Product View</h1>

		<div>
			<a href="/">Menu</a>
			<a >|</a>
			<a href="/merchant_product/create">Assign Merchant</a>
		</div><br><br><br>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Product Name</th>
				<th>Merchant Name</th>		
				<th>Category</th>
				<th>Price</th>
				<th>Created At</th>
				<th>Updated At</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach($merchant_product as $merchant_product)
		<tr>
			<td><a>{{$merchant_product->product_name}}</a> </td>
			<td><a>{{$merchant_product->merchant_name}}</a> </td>
			<td><a>{{$merchant_product->category_name}}</a> </td>
			<td><a>{{$merchant_product->price}}</a> </td>
			<td><a>{{date_format(date_create($merchant_product->created_at), 'd M Y')}}</a> </td>
			<td><a>{{date_format(date_create($merchant_product->updated_at), 'd M Y')}}</a> </td>
			<td>
				<a href="merchant_product/{{$merchant_product->id}}/edit">
					<button>
						<i>Edit</i>
					</button>
				</a>
				<form action="{{ url('merchant_product/'.$merchant_product->id) }}" method="post">
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
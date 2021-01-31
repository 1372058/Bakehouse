@extends('layout')

@section('title')
List cars
@endsection
@section('mainContent')
	<h1>Merchant List</h1>

		<div>
			<a href="/">Menu</a>
			<a >|</a>
			<a href="/merchant/create">Add Merchant</a>
		</div><br><br><br>

	<table class="table table-striped"   style="">
		<thead>			
				<th>No</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Address</th>
				<th>Created At</th>
				<th>Updated At</th>
				<th>Action</th>
		</thead>
		<tbody>
		@foreach($merchant as $merchant)
		<tr>
			<td><a>{{$merchant->name}}</a> </td>
			<td><a>{{$merchant->email}}</a> </td>
			<td><a>{{$merchant->phone_number}}</a> </td>
			<td><a>{{$merchant->address}}</a> </td>
			<td><a>{{date_format(date_create($merchant->created_at), 'd M Y')}}</a> </td>
			<td><a>{{date_format(date_create($merchant->updated_at), 'd M Y')}}</a> </td>
			<td>
				<a href="merchant/{{$merchant->id}}/edit">
					<button>
						<i>Edit</i>
					</button>
				</a>
				<form action="{{ url('merchant/'.$merchant->id) }}" method="post">
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
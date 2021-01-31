@extends('layout')

@section('title')
Category List
@endsection
@section('mainContent')
	<h1>Category List</h1>

		<div>
			<a href="/">Menu</a>
			<a >|</a>
			<a href="/category/create">Add Category</a>
		</div><br><br><br>

	<table class="table table-striped">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Created At</th>
				<th>Updated At</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach($category as $category)
		<tr>
			<td><a>{{$category->name}}</a> </td>
			<td><a>{{date_format(date_create($category->created_at), 'd M Y')}}</a> </td>
			<td><a>{{date_format(date_create($category->updated_at), 'd M Y')}}</a> </td>
			<td>
				<a href="category/{{$category->id}}/edit">
					<button>
						<i>Edit</i>
					</button>
				</a>
				<form action="{{ url('category/'.$category->id) }}" method="post">
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
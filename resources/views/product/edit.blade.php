@extends('layout')

@section('title')
Add Product
@endsection

@section('mainContent')
	<h2>Update Product</h2>

	<form class="form-horizontal" action ="{{ route('product.update', $product->id)}}" method="POST">
		@csrf
        @method('PUT')
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" value="{{ $product->name }}" class="form-control input-md">
			  </div>
			</div><br>
			<div class="form">
				<label for="dropdown" class="col-sm-4 col-form-label text-md-right">Category</label>
				<div class="col-md-12">
					<div class="form-group">
						<select name="category_id" class="form-control">
							<option value="">category</option>
							@foreach($category as $category)
								<option value="{{ $category->id }}">
									{{ $category->name }}
								</option>
							@endforeach
						</select>
					</div>
				</div>
			</div><br><br>

			<!-- Button -->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="submit"></label>
			  <div class="col-md-4">
			    <button id="submit" name="submit" class="btn btn-primary">Save</button>
			  </div>
			</div>

			</fieldset>
		</form>

		@if ($errors->any())
		    <div class="alert alert-danger">
		        <ul>
		            @foreach ($errors->all() as $error)
		                <li>{{ $error }}</li>
		            @endforeach
		        </ul>
		    </div>
		@endif
@endsection
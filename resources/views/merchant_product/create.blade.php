@extends('layout')

@section('title')
Add Product
@endsection

@section('mainContent')
	<h2>Add Product</h2>

	<form class="form-horizontal" method="post"  action="{{ route('merchant_product.store') }}">
		@csrf
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Price</label>  
			  <div class="col-md-4">
			  <input id="price" name="price" type="text" placeholder="Enter Product Price" class="form-control input-md">
			  </div>
			</div><br>

			<div class="form-group row">
				<label for="dropdown" class="col-sm-4 col-form-label text-md-right">Merchant Name</label>
				<div class="col-md-12">
					<div class="form-group">
						<select name="merchant_id" class="form-control">
							<option value=""> -- Select One --</option>
							@foreach($merchant as $merchant)
								<option value="{{ $merchant->id }}">
									{{ $merchant->name }}
								</option>
							@endforeach
						</select>
					</div>
				</div>
			</div><br>

			<div class="form-group row">
				<label for="dropdown" class="col-sm-4 col-form-label text-md-right">Product Name</label>
				<div class="col-md-12">
					<div class="form-group">
						<select name="product_id" class="form-control">
							<option value=""> -- Select One --</option>
							@foreach($product as $product)
								<option value="{{ $product->id }}">
									{{ $product->name }}
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
@extends('layout')

@section('title')
Add Product
@endsection

@section('mainContent')
	<h2>Update Product</h2>
	<form class="form-horizontal" action ="{{ route('merchant.update', $merchant->id)}}" method="POST">
		@csrf
        @method('PUT')
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="{{ $merchant->name }}" value="{{ $merchant->name }}" class="form-control input-md">
			  </div>
			</div><br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Email</label>  
			  <div class="col-md-4">
			  <input id="email" name="email" type="text" placeholder="{{ $merchant->email }}" value="{{ $merchant->email }}" class="form-control input-md">
			  </div>
			</div><br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Phone Number</label>  
			  <div class="col-md-4">
			  <input id="phone_number" name="phone_number" type="text" placeholder="{{ $merchant->phone_number }}" value="{{ $merchant->phone_number }}" lass="form-control input-md">
			  </div>
			</div><br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Address</label>  
			  <div class="col-md-4">
			  <input id="address" name="address" type="text" placeholder="{{ $merchant->address }}" value="{{ $merchant->address }}" class="form-control input-md">
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
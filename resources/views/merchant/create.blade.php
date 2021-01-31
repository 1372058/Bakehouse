@extends('layout')

@section('title')
Add Product
@endsection

@section('mainContent')
	<h2>Add Product</h2>

	<form class="form-horizontal" method="post"  action="{{ route('merchant.store') }}">
		@csrf
			<fieldset>

			<!-- Form Name -->
			<legend></legend>

			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Name</label>  
			  <div class="col-md-4">
			  <input id="name" name="name" type="text" placeholder="Enter Name" class="form-control input-md">
			  </div>
			</div><br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Email</label>  
			  <div class="col-md-4">
			  <input id="email" name="email" type="text" placeholder="Enter Email" class="form-control input-md">
			  </div>
			</div><br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Phone Number</label>  
			  <div class="col-md-4">
			  <input id="phone_number" name="phone_number" type="text" placeholder="Enter Phone Number" class="form-control input-md">
			  </div>
			</div><br>

			<div class="form-group">
			  <label class="col-md-4 control-label" for="name">Address</label>  
			  <div class="col-md-4">
			  <input id="address" name="address" type="text" placeholder="Enter Address" class="form-control input-md">
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
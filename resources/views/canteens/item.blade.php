@extends('layouts.master')
@section('link')

@endsection

@section('content')

<div class="container">
	
	<h1 align="center">Item</h1>
	<div class="form-group" align="right">
		<button type="submit" class="btn btn-primary">Add New Item</button>
	</div>

	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">Item Id</th>
	      <th scope="col">Item Photo</th>
	      <th scope="col">Item Name</th>
	      <th scope="col">Item Category</th>
	      <th scope="col">Prices</th>
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>
	      
	    </tr>
	  </thead>
	  <tbody>
	    <tr class="table-success">
	      <td>1</td>
	      <td>ff</td>
	      <td>Chicken Curry</td>
	      <td>Curry</td>
	      <td>1000</td>
	      <td><button type="submit" class="btn btn-primary">Edit</button></td>
	      <td><button type="submit" class="btn btn-primary">Delete</button></td>
	    </tr>
	    
	  </tbody>
</table> 
</div>	




@endsection

@section('script')


@endsection 
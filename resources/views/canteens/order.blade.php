@extends('layouts.master')
@section('content')

<div class="container">
	<h1 align="center">Orders</h1>
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">Order Id</th>
	      <th scope="col">Customer Name</th>
	      <th scope="col">Item Name</th>
	      <th scope="col">Quantity</th>
	      <th scope="col">Status</th>
	      <th scope="col">Time to eat</th>
	      <th scope="col">Complete</th>	      	      
	    </tr>
	  </thead>
	  <tbody>
	    <tr class="table-success">
	      <td>1</td>
	      <td>Su Su</td>
	      <td>Chicken Curry</td>
	      <td>2</td>
	      <td>Libary</td>
	      <td>11:00am</td>
	      <td><button type="submit" class="btn btn-primary">Complete</button></td>
	    </tr>
	    
	  </tbody>
</table> 
</div>


@endsection
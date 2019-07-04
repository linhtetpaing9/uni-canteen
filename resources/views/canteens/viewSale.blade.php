@extends('layouts.master')

@section('link')

@endsection

@section('content')

<div class="container">
<h1 class="order" align="center">View Sales</h1>
<nav class="navbar navbar-light bg-light">
	<a class="navbar-brand"></a>
	<form class="form-inline" align="left">
		<input type="date" class="form-control">
	<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		
	</form>
</nav>

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Item Name</th>
      <th scope="col">Quantity</th>
      <th scope="col">Prices</th>
      
    </tr>
  </thead>
  <tbody>
    <tr class="table-success">
      <td>Chicken Curry</td>
      <td>2</td>
      <td>2000ks</td>
    </tr>
    
  </tbody>
</table> 
</div>

@endsection

@section('script')

@endsection
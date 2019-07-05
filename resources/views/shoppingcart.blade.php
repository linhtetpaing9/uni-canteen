@extends('layouts.master')
@section('content')



<div class="container">
	<h3 align="center"><i class="fa fa-shopping-cart"></i>Shopping cart</h3>
	<table class="table table-hover">
	  <thead>
	    <tr>
	      <th scope="col">Item</th>
	      <th scope="col">Quantity</th>
	      <th scope="col">Price</th>
	           	      
	    </tr>
	  </thead>
	  <tbody>
	    <tr class="table-success">
	      <td>chicken curry</td>
	      <td>1</td>
	      <td>ks700</td>
	      <td><i class="glyphicon glyphicon-remove"></i></td>
	    </tr>
	    
	  </tbody>


	  <tbody>
	    <tr class="table-success">
	      <td>pork curry</td>
	      <td>2</td>
	      <td>ks1400</td>
	      <td><i class="glyphicon glyphicon-remove"></i></td>
	    </tr>
	    
	  </tbody>


	  <td><h4>Total</h4></td>
	  <td><h4>3</h4></td>
      <td><h4>ks2100</h4></td>

</table> 





<br>

<form>
   
   Time to eat:
   <input type="time" name="usr_time">

</form>

<br>

 <a href="/delivery">

   	<input type="button" class="form-check-input" name="delivery" id="optionsRadios1" value="delivery" checked="" >
   </a>



   
 <a href="/Shop1Menu">
  	<input type="submit" placeholder="Order" value="order">
    </a>


</div>




@endsection
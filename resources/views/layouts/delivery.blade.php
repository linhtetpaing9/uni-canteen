@extends('layouts.master')
@section('content')




<!-- <input type="text" class="form-control" placeholder="location" style="width:100%; height:100px;" >

  Time to reach:    <input type="time" name="usr_time">
  <input type="submit"> -->


<center>

<div class="card mb-3">
  <h2 class="card-header">Delivery</h2>
  
  <img style="height: 220px; width: 260px; display: block;" src="shop1.webp" alt="Card image">
  
  <div class="card-body">
   <input type="text" class="form-control" placeholder="please enter your location" style="width:260px; height:220px;" >

  
   <br><br>
  <a href="/Shop1Menu">
  	<input type="submit" placeholder="Order" value="order">
    </a>
  </div>
 
</div>
</center>

@endsection
@extends('layouts.master')
@section('content')

<div class="card mb-3">
  <h2 class="card-header">Bakery Shop I</h2>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
  </div>
  <img style="height: 300px; width: 100%; display: block;" src="shop1.webp" alt="Card image">
  
  <div class="card-body">
    <h4><a href="/shop1" class="card-link">Click this...you want to view some menu</a></h4>
    
  </div>
  <div class="card-footer text-muted">
    You can order before you eat and we may deliver to your place, if you want!!
  </div>
</div>

<div class="card">
  <h2 class="card-header">Bakery Shop II</h2>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <h6 class="card-subtitle text-muted">Support card subtitle</h6>
  </div>
  <img style="height: 300px; width: 100%; display: block;" src="shop2.jpeg" alt="Card image">
  
  <div class="card-body">
    <h4><a href="/shop1" class="card-link">Click this...you want to view some menu</a></h4>
    
  </div>
  <div class="card-footer text-muted">
    You can order before you eat and we may deliver to your place, if you want!!
  </div>
</div>



@endsection
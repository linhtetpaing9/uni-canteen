@extends('layouts.master')
@section('style')
	<style type="text/css">
		.row{
			margin-top: 1rem;
		}

		.text{
			background-color: blue;
		}
	</style>
@endsection
@section('content')
<div class="container">
	<h1 align="center">Welcome to Shop1</h1>
	<h4 class="text" align="center">You can Order to our shop</h4>
</div>

<div class="container">
	<div class="row justify-content-start">
		<div class="col">
			<div class="card" style="width: 18rem;">
			  <img src="food2.jpeg"  class="card-img-top" alt="...">
			  <div class="card-body">
			  	<h4>Mont Hinn Khar</h4><hr>
			    <h4 class="card-text">800ks</h4>
			  </div>
			</div>
		</div>
		<div class="col">
			<div class="card" style="width: 18rem;">
			  <img src="bb.jpg"  class="card-img-top" alt="...">
			  <div class="card-body">
			  	<h4>Nan Gyi Thote</h4><hr>
			    <h4 class="card-text">700ks</h4>
			  </div>
			</div>
	    </div>
	</div>

	<div class="row justify-content-start">
	    <div class="col">
			<div class="card" style="width: 18rem;">
			  <img src="ll.jpg"  class="card-img-top" alt="...">
			  <div class="card-body">
			  	<h4>La Phat Thote</h4><hr>
			    <h4 class="card-text">500ks</h4>
			  </div>
			</div>
	    </div>

	    <div class="col">
			<div class="card" style="width: 18rem;">
			  <img src="chicken.jpg"  class="card-img-top" alt="...">
			  <div class="card-body">
			  	<h4>Chicken and potato curry</h4><hr>
			    <h4 class="card-text">500ks</h4>
			  </div>
			</div>
	    </div>
	</div>

 


</div>

@endsection
@extends('layouts.master')
@section('content')

<button type="button" class="btn btn-primary">drink</button>
<button type="button" class="btn btn-secondary">soup</button>
<button type="button" class="btn btn-success">curry</button>
<button type="button" class="btn btn-info">salad</button>
<button type="button" class="btn btn-warning">rice</button>

<div class="row">
	<div class="column">
         <div class="card mb-3">
            <h3 class="card-header">Chicken Curry</h3>
               <span>ks700</span>
                 <a href="/order" class="card-link">
                 	<img style="height: 150px; width: 150px; display: block;" src="beer.png" alt="Card image">
                 </a>
         </div>
     </div>


    <div class="column">
       <div class="card mb-3">
           <h3 class="card-header">Pork Curry</h3>
             <span>ks700</span>
               <a href="/order" class="card-link">
                <img style="height: 150px; width: 150px; display: block;" src="shop1.webp" alt="Card image">
               </a>
  
        </div>
    </div>
</div> 

@endsection
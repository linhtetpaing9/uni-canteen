@extends('layouts.master')
@section('content')
<head>
  <title></title>
  <style>
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
  align:center;


}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

form {
  text-align: center;
}

image{
  width: 367px;
    height: 137px;
    margin-left: -22px;
    margin-right: -34px;
    margin-top: 7px;
}
</style>
</head>

<body>
<center>
	<header><h2 style="color: blue, font-family:sans-serif;">About Us</h2></header>
</center>

<!-- https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKoZiT69S6eh-f6N3xiht7k1xSjBiQLQhkqd9xLrGM0mHBqeCqPg -->
<div class="image">
   <header>
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKoZiT69S6eh-f6N3xiht7k1xSjBiQLQhkqd9xLrGM0mHBqeCqPg
" >
   </header>
</div>

<div class="row">
  <h3 style="color: blue, font-family:sans-serif;">What is Uni Cateen?</h3>
  <p>It is a web site application .It is the food ordering system but only for University campus.Our website allows customers to search shops in one place,and view foods menu from our website ,and order foods .Customers can eat in shop,pick up or delivered by our delivery services.</p>
</div>


<div class="row">
  <h3 style="color: blue, font-family:sans-serif;">How do we deliver?</h3>
  <p>Our delivery service is by moter-cycle or bicycle.Customers only need to fill up the required information like phone number and address ,so our staff will deliver the foods with the quickest time and the best favour in your hands.Delivery fees may be paid according to customer's location and it may ajust between customer and the shop.Cash on hands system!  </p>
</div>


<div class="row">
  <h3 style="color: blue, font-family:sans-serif;">Our value?</h3>
  <p>We reduce the problem of overcrowding in ordering foods in university's canteen.It may save a lot of time for doing another more valuable works. </p>
</div>


</body>
@endsection
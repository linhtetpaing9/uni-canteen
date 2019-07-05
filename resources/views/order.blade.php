@extends('layouts.Shop1Menu')
@section('content')
<head>
	<title></title>
	<style type="text/css">
		
.qty-button {
	display: inline-block;
	height: 20px;
	width: 20px;
	font-size: 15px;
	line-height: 20px;
	text-align: center;
	border-bottom: none;
	background-color: black;
	color: white;
	margin-right: 3px;

	&:hover, &:active, &:focus {
		color: white;
	}


}

.woocommerce .quantity .qty {
    width: 35px;
    padding-right: 0;
}
</head>

	</style>




	<script type="text/javascript">
input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
    display: none;
}




// Add +/1 To QTY Inputs

  $(function() {
      $("div.quantity").append('<a class="inc qty-button">+</a><a class="dec qty-button">-</a>');

      $(".qty-button").on("click", function() {

      console.log('clicked');

      var $button = $(this);
      var oldValue = $button.parent().find("input").val();

      if ($button.text() == "+") {
        var newVal = parseFloat(oldValue) + 1;
      } else {
       // Don't allow decrementing below zero
        if (oldValue > 0) {
          var newVal = parseFloat(oldValue) - 1;
        } else {
          newVal = 0;
        }
      }

      $button.parent().find("input").val(newVal);

    });

  });

  </script>

<body>

<div class="shopping-cart">
  <!-- Title -->
  <div class="title" align="
  center">
  <h3>
    Chicken curry
    </h3>
  </div>
 
  <!-- Product #1 -->
  <div class="item">
    <div class="buttons">
      <span class="delete-btn"></span>
      <span class="like-btn"></span>
    </div>
 
 <center>
    <div class="image">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRctSr5nda8oHFoLKCqb-4GJedXnTF7Idkhoz9hKfkRM8DlYrpZJg" alt="" />
    </div>

   <br>


<p>Special Options</p>

<input type="text" class="form-control" placeholder="normal spicy" style="width:200px; height:100px;" >
       
<br>


<div class="quantity" align="center">
  
	<input type="number" step="1" min="0" max="" value="1" title="Qty" class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
  
</div>

<br>

<a href="/Shop1Menu"><button > Add</button></a>
</center>
</body>
@endsection







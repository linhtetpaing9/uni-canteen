@extends('layouts.master')
@section('content')
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
</style>
</head>
<body>
<center>
	<header><h2 >About Us</h2></header>
</center>



<div class="form">
<div class="row">
  <div class="column">
    <div class="text">
      <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-04/7/18/enhanced/webdr12/enhanced-6820-1428444266-15.png?output-format=auto&output-quality=auto" width="100" height="100">
    </div>
  </div>

  <div class="column">
    <div class="text">
    <p>Ye Naing</p>
	<p>0978223255</p>
	<p>facebook : yenaing123</p>
	<p><a href = "mailto: yenaing123@gmail.com">Send Email</a></p>
    </div>
  </div>
</div>

<br>

<div class="row">
  <div class="column">
    <div class="text">
      <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-04/7/18/enhanced/webdr12/enhanced-6820-1428444266-15.png?output-format=auto&output-quality=auto" width="100" height="100">
    </div>
  </div>

  <div class="column">
    <div class="text">
     <p>Theint Thinzar Maung</p>
     <p>0995622255</p>
	 <p>facebook : theintthinzarmaung123</p>
     <p><a href = "mailto: theintthinzarmaung123@gmail.com">Send Email</a></p>
    </div>
  </div>
</div>


<br>

<div class="row">
  <div class="column">
    <div class="text">
      <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-04/7/18/enhanced/webdr12/enhanced-6820-1428444266-15.png?output-format=auto&output-quality=auto" width="100" height="100">
    </div>
  </div>

  <div class="column">
    <div class="text">
    <p>Kyaw May Thu</p>
	<p>09254613687</p>
	<p>facebook : kyawmaythu123</p>
    <p><a href = "mailto: kyawmaythu123@gmail.com">Send Email</a></p>
    </div>
  </div>
</div>

<br>


<div class="row">
  <div class="column">
    <div class="text">
      <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-04/7/18/enhanced/webdr12/enhanced-6820-1428444266-15.png?output-format=auto&output-quality=auto" width="100" height="100">
    </div>
  </div>

  <div class="column">
    <div class="text">
     <p>Shwe Yee Lin</p>
     <p>097866512333</p>
     <p>facebook : shweyeelin123</p>
     <p><a href = "mailto: shweyeelin123@gmail.com">Send Email</a></p>
    </div>
  </div>
</div>

<br>

<div class="row">
  <div class="column">
    <div class="text">
      <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-04/7/18/enhanced/webdr12/enhanced-6820-1428444266-15.png?output-format=auto&output-quality=auto" width="100" height="100">
    </div>
  </div>

  <div class="column">
    <div class="text">
     <p>Mar Lar Soe</p>
     <p>09787762060</p>
     <p>facebook : Mar Lar Soe</p>
     <p><a href = "mailto: wangjuanjuan.ucsm1998716@gmail.com">Send Email</a></p>
    </div>
  </div>
</div>
</div>
</body>


@endsection
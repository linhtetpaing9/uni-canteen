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

</style>
</head>
<body>
<div class="login-box">
<div align="center">

<div class="row">
  <div class="column">
    <div class="body">
      <p>Your feedback is very valuable for us!</p>
       <!--  <p>We always wait for your feedback and suggestion.Give us suggestions and show our faults or incompleted things in anywhere you dislike.Tell us what you want us to fill your willingness.Thank you so much and for using this!
        </p> -->
    </div>
  </div>
<div align="center">
  <div class="column">
    <div class="row">
      <!--  <div class="row"> -->
      <img src="https://img.buzzfeed.com/buzzfeed-static/static/2015-04/7/18/enhanced/webdr12/enhanced-6820-1428444266-15.png?output-format=auto&output-quality=auto" width="100" height="100">
    </div>

    <br>

      <div class="row">
        <input type="text" class="form-control"style="width:200px; height:50px;" placeholder="User ID" style="width:200px; height:50px;" >
       
      </div> 

    <br>
     <div class="row">
        <input type="text" class="form-control" placeholder="feedback" style="width:200px; height:200px;" >
       
     </div>
    <br>

      <div class="row">
        <!-- <div class="col-xs-12"> -->
        <a href="resources/layouts/master.blade.php"> 
         <button type="submit" class="btn btn-primary btn-block btn-flat" style="width:200px; height:50px;">
          submit
         </button>
       </a>
      </div>
       
      </div>
  </div>
    </div>
  </div>
</form>
</body>

@endsection
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>canteen</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	@include('layouts.link')
</head>
<body class="hold-transition skin-blue sidebar-mini">

    

	<div class="">
		@include('layouts.header')
		@include('layouts.sidebar')
   
  
		<!-- @include('layouts.image') -->
		<!-- @include('layouts.footer') -->

		<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
 
  
      
    </section>


    <section class="content">
     @yield('content')
    	

    

    </section>
    
  </div>
		@include('layouts.script')

</div>


	
</section>



</body>
</html>
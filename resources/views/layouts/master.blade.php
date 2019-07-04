<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.meta')
	@include('layouts.link')
	@yield('style')
</head>
<body class="hold-transition skin-blue sidebar-mini">
	<div class="">
		@include('layouts.header')
		@include('layouts.sidebar')
		<div class="content-wrapper">
    <!-- Content Header (Page header) -->
		    
		    <section class="content">
		    <div class="row">
		    	@yield('content')
		    </div>
		    </section>
    
        </div>
	    @include('layouts.script')
	</div>


 </body>
</html>
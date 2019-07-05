@extends('layouts.master')
@section('content')

<div class="container">
	<div class="row">
		<h1>Menuအသစ္ထည့္ရန္</h1>
	</div>
	<form>
	<div class="form-group">
    <input type="text" class="form-control" id="exampleInputItemName"  placeholder="Enter Item Name">
    </div>
 	<div class="form-group">
    <select class="custom-select">
      <option selected="">Choose Category Name</option>
      <option value="1">Rice</option>
      <option value="2">Curry</option>
      <option value="3">Noodle</option>
      <option value="4">Juice</option>
      <option value="5">Coffee</option>
    </select>
  </div>
  <div class="form-group">
    <div class="input-group mb-3">
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="inputGroupFile02">
        <label class="custom-file-label" for="inputGroupFile02">Choose Item Photo</label>
      </div>
    </div>
  </div>
	
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Price">
	</div>
	<button type="submit" class="btn btn-primary">Add New Item</button>	
	</form>

								
</div>


@endsection

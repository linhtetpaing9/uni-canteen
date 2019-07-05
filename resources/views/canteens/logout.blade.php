@extends('layouts.master')

@section('content')

<div class="logout-box">
  <div class="logout-logo">
    <a href="/"><b>Log Out</b></a>
  </div>
  <div class="logout-box-body">
    <p class="fa fa-question-circle" >Are you sure?</p><br>
    <button type="submit">Yes</button>
    <button type="submit">No</button>
</div>
</div>



@endsection
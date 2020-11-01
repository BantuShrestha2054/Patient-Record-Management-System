<?php
if(isset($_POST['search'])){
  $sql = "select * from patient where name like '".$_POST['name']."%'";
}
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('resources/css/project.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('resources/css/bootstrap.min.css')}}">
  <script type="text/javascript" src="{{asset('resources/js/jquery-3.3.1.slim.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('resources/js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('resources/js/bootstrap.bundle.min.js')}}"></script>


</head>
<body>




<div class="sidenav">
  <h2>Menu</h2>
    <a class="nav-link" href="#">Home</a>
	  
	  <a class="nav-link" href="{{route('admin1.patient')}}">Patient Record</a>
	  <a class="nav-link" href="{{route('admin1.department')}}">Department</a>
    <a class="nav-link" href="{{route('admin1.follow')}}">Follow up</a>
    <a class="nav-link" href="javascript:void(0)" onclick="$('#logout-form').submit();">Logout</a>
</div>


<div id="main">
<div class="header"> 
 	<h1>Patient Record System

    <form class="form-inline my-2 my-lg-0 float-right">
        <input class="form-control mr-sm-2" type="search" name="Search" placeholder="Search" aria-label="Search">
        <button class="btn btn-light" type="submit">Search</button>
    </form>
  </h1>
</div>
<form id="logout-form" action="{{route('logout')}}" method="post" class="d-done">
  {{csrf_field()}}
</form>

  <br>
  <br>
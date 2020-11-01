<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="{{asset('resources/css/bootstrap.min.css')}}">
  <script type="text/javascript" src="{{asset('resources/js/jquery-3.3.1.slim.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('resources/js/popper.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('resources/js/bootstrap.bundle.min.js')}}"></script>

  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">MyDashboard</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('admin.product-category')}}">Product Category</a>
      </li>
      
        <li class="nav-item">
        <a class="nav-link" href="{{route('admin.products')}}">Products</a>
      </li>
        </a>
  
    </ul>

    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="javascript:void(0)" onclick="$('#logout-form').submit();">Logout</a>
      </li>


    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<form id="logout-form" action="{{route('logout')}}" method="post" class="d-done">
  {{csrf_field()}}
</form>

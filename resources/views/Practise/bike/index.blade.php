@include('practise.header')
<div class="container">
	<h3> Bike
	   <small> <a class="btn btn-primary float-right" href="{{route('bike.create')}}">Create</a></small>
    </h3>
</div>

@if (session()->has('status'))
    <div class="alert alert-success">
       <button class="close" data-dismiss="alert" arial-label="close">&times;</button>
    {{session()->get('status')}}
    </div>

@endif

@include('practise.footer')
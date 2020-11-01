@include('dashboard.header')

<style type="text/css">
	.a{
		width: 80%;
	
	}
</style>
	<div class="mt-3 mb-3">
	<div class="container">
		<h3>Create Product Category</h3>
	</div>
	<form method="post" action="{{route('product-category.update',$data->id)}}">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="form-group a">
		<label>Name</label>
		<input type="text" name="name" class="form-control" required="" value="{{$data->name}}">
		</div>
		<div class="form-group a">
		<label>Description </label>
		<textarea name="description" class="form-control" >{{$data->description}}</textarea> 
		</div>
		<button class="btn btn-success">Update</button>
	</form>	
</div>

@include('dashboard.footer')
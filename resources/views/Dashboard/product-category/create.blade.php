@include('dashboard.header')
	<div class="mt-3 mb-3">
	<div CLASS="container">
		<h3>Create Product Category</h3>
	</div>
	<form method="post" action="{{route('product-category.store')}}">
		{{ csrf_field() }}
		<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" required="">
		</div>
		<div class="form-group">
		<label>Description </label>
		<textarea name="description" class="form-control"></textarea> 
		</div>
		<button class="btn btn-success">Create</button>
	</form>	
</div>

@include('dashboard.footer')
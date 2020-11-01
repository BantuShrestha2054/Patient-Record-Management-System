@include('dashboard.header')
	<div class="mt-3 mb-3">
	<div CLASS="container">
		<h3>Create Products</h3>
	</div>
	<form method="post" action="{{route('products.store')}}" enctype="multipart/form-data">
		{{ csrf_field() }}
		<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" required="">
		</div>

		<div class="form-group">
		<label>Upload Image</label>
		<input type="file" name="image">
		</div>

		<div class="form-group">
		<label>Description </label>
		<textarea name="description" class="form-control"></textarea> 
		</div>

		<div class="form-group">
		<label>Price</label>
		<input type="number" name="price" class="form-control" required="">
		</div>	

		<div class="form-group">
		<label>Quantity</label>
		<input type="number" name="quantity" class="form-control" required="">
		</div>


		<div class="form-group">
		<label>Select Category</label>
		<select name="category_id" class="form-control" required="">
			<option value="0">Select Category</option>
			@foreach($data as $value)
			<option value="{{$value->id}}">{{$value->name}}</option>
			@endforeach
		</select>
		</div>

		<button class="btn btn-success">Create</button>
	</form>	
</div>

@include('dashboard.footer')
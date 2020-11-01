@include('dashboard.header')
	<div class="mt-3 mb-3">
	<div CLASS="container">
		<h3>Create Product Category</h3>
	</div>
	<form method="post" action="{{route('products.update',$data->id)}}">
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" required="" value="{{$data->name}}">
		</div>

		<div class="form-group">
		<label>Upload Image</label>
		<input type="file" name="image">
		<input type="hidden" name="image_url" value="{{$data->image}}">
		@if($data->image)
		<img src="{{asset($data->image)}}" height="50" width="50">
		@endif
		</div>

		<div class="form-group">
		<label>Description </label>
		<textarea name="description" class="form-control" >{{$data->description}}</textarea> 
		</div>

		<div class="form-group">
		<label>Price</label>
		<input type="text" name="price" class="form-control" value="{{$data->price}}" required="">
		</div>

		<div class="form-group">
		<label>Quantity</label>
		<input type="text" name="quantity" class="form-control" value="{{$data->quantity}}">
		</div>

		<div class="form-group">
		<label>Select Category</label>
		<select name="category_id" class="form-control">
			<option value="0">Select Category</option>
			@foreach($category as $value)
			<option value="{{$value->id}}" @if ( $value->id==$data->category_id) selected @endif >{{$value->name}}</option>
			@endforeach
		</select>
		</div>




		<button class="btn btn-success">Update</button>
	</form>	
</div>

@include('dashboard.footer')
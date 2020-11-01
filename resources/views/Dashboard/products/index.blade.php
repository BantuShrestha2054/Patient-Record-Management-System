@include('dashboard.header')

<div class="container">
	<h3 class="mt-3 mb-3">Products
		<small>
		<a href="{{route('products.create')}}" class="btn btn-primary float-right">Create</a>
	</small>
</h3>

	<table class="table table-striped">
		<tr>
		<th scope="col">S.N</th>
		<th>Name</th>
		<th>Image</th>
		<th>Description</th>
		<th>Price</th>
		<th>Quantity</th>
		<th>Created Date</th>
		<th>Category Name</th>
		<th>Action</th>
		</tr>

		@foreach($data as $key=>$d)
		<tr>
			<td scope="row">{{$data->firstItem()+$key}}</td>
			<td>{{$d->name}}</td>
			<td>@if($d->image)
				<img src="{{asset($d->image)}}" height="50" width="50">
				@endif
			</td>
			<td>{{$d->description}}</td>
			<td>{{$d->price}}</td>
			<td>{{$d->quantity}}</td>
			<td>{{$d->created_at}}</td>
			<td>{{$d->category->name}}</td>
			
			<td>
				<a href="{{route('products.edit',$d->id)}}" class="btn btn-secondary">Edit</a>
				
			<form action="{{route('products.destroy',$d->id)}}" method="POST" class="d-inline">

				{{ csrf_field() }}
				{{ method_field('DELETE') }}


				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
			</td>
		</tr>
		@endforeach
	</table>
	</div>

@include('dashboard.footer')
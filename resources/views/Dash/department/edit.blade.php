@include('dash.header')
<div class="mt-3 mb-3">
	<div CLASS="container">
		<h3>Update Department <small>
		<a href="{{route('admin1.department')}}" class="btn btn-primary float-right">Back</a></small></h3>
	</div>
<form method="post" action="{{route('department.update',$data->id)}}">
  	
  	{{ csrf_field() }}
  	{{method_field('PUT')}}
		<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="{{$data->name}}" required="">
		</div>
		<div class="form-group">
		<label>Description </label>
		<textarea name="description" class="form-control">{{$data->description}}</textarea> 
		</div>
		<button class="btn btn-success">Update</button>
  
</form>
</div>



@include('dash.footer')
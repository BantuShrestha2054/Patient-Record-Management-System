@include('dash.header')
	<div class="container">
	<h3 class="mt-3 mb-3">Department
		<small>
		<a href="{{route('department.create')}}" class="btn btn-primary float-right">Create</a></small>
	</h3>
	@if (session()->has('status'))
    <div class="alert alert-success">
       <button class="close" data-dismiss="alert" arial-label="close">&times;</button>
    {{session()->get('status')}}
    </div>

@endif
	<table class="table">
		<tr class="thead-light">
		<th>S.N</th>
		<th>Name</th>
		<th>Description</th>
		<th>Created_AT</th>
		<th>Operation</th>
		</tr>

		
		@foreach($data as $key=>$d)
		<tr>
			<td scope="row">{{$data->firstItem()+$key}}</td>
			<td>{{$d->name}}</td>
			<td>{{$d->description}}</td>
			<td>{{date('M d, Y',strtotime($d->created_at))}}</td>
			<td>
				<a href="{{route('department.edit',$d->id)}}" class="btn btn-secondary">Edit</a>
				
			<form action="{{route('department.destroy',$d->id)}}" method="POST" class="d-inline">

				{{ csrf_field() }}
				{{ method_field('DELETE') }}


				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
			</td>
		</tr>
		
		@endforeach
	</table>
		<div class="justify-content-center">
			@if (class_basename($data) !== 'Collection')
			{{ $data->links()}}
			@endif

		</div>
	</div>

@include('dash.footer')


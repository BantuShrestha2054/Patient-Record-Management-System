
@include('dash.header')


	<div class="container">
	<h3 class="mt-3 mb-3">Patient Record
	
		<small>
		<a href="{{route('patient.create')}}" class="btn btn-primary float-right">Create</a></small>
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
		<th>Gender</th>
		<th>Date Of Birth</th>
		<th>Phone</th>
		<th>Address</th>
		<th>Date Of Register</th>
		<th>Department</th>
		<th>Operation</th>
		</tr>

		
		@foreach($data as $key=>$d)
		<tr>
			<td scope="row">{{$data->firstItem()+$key}}</td>
			<td>{{$d->name}}</td>
			<td>{{$d->gender}}</td>
			<td>{{date('M d, Y',strtotime($d->dob))}}</td>
			<td>{{$d->phone}}</td>
			<td>{{$d->address}}</td>
			<td>{{date('M d, Y',strtotime( $d->created_at))}}</td>
			<td>{{$d->department['name']}}</td>
			<td>
				<a href="{{route('patient.edit',$d->id)}}" class="btn btn-secondary">Edit</a>
				
			<form action="{{route('patient.destroy',$d->id)}}" method="POST" class="d-inline">

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
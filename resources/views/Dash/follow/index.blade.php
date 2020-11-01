@include('dash.header')
	<div class="container">
	<h3 class="mt-3 mb-3">Follow up
		<small>
		<a href="{{route('follow.create')}}" class="btn btn-primary float-right">Create</a></small>
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
		<th>Patient Name</th>
		<th>Follow-Up Date</th>
		<th>Patient Number</th>
		<th>Patient Address</th>
		<th>Operation</th>
		</tr>

		
		@foreach($data as $key=>$d)
		<tr>
			<td scope="row">{{$data->firstItem()+$key}}</td>
			<td>{{$d->patient['name']}}</td>
			<td>{{date('M d, Y',strtotime($d->date))}}</td>
			<td>{{$d->patient['phone']}}</td>
			<td>{{$d->patient['address']}}</td>
			<td>
				<a href="{{route('follow.edit',$d->id)}}" class="btn btn-secondary">Edit</a>
				
			<form action="{{route('follow.destroy',$d->id)}}" method="POST" class="d-inline">

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


@include('dash.header')
<div class="mt-3 mb-3">
	<div CLASS="container">
		<h3>Update Patient <small>
		<a href="{{route('admin1.patient')}}" class="btn btn-primary float-right">Back</a></small></h3>
	</div>
<form method="post" action="{{route('patient.update',$data->id)}}">
  	
  	{{ csrf_field() }}
  	{{method_field('PUT')}}

		<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" value="{{$data->name}}" required="">
		</div>

		<div class="form-group">
		<label>Gender</label>
		<input type="radio" name="gender"  value="male" @if($data->gender=='male') checked @endif>Male
		<input type="radio" name="gender"  value="female" @if($data->gender=='female') checked @endif>Female
		</div>

		<div class="form-group">
		<label>Date Of Birth</label>
		<input type="date" name="dob" value="{{$data->dob}}"class="form-control" required="">
		@if($errors->has('dob'))
        <div class="error-text">
            {{$errors->first('dob')}}
        </div>
  	    @endif
		</div>

		<div class="form-group">
		<label>Phone</label>
		<input type="number" name="phone" value="{{$data->phone}}" class="form-control" required="">
		@if($errors->has('phone'))
        <div class="error-text">
            {{$errors->first('phone')}}
        </div>
  	    @endif
		</div>


		<div class="form-group">
		<label>Address</label>
		<input type="address" name="address" value="{{$data->address}}"class="form-control" required="">
		</div>


		<div class="form-group">
		<label>Select Department</label>
		<SELECT name="department_id" class="form-control" required="">
			<option value="0">Select Department</option>
			@foreach($department as $value)
			<option value="{{$value->id}}" @if ( $value->id==$data->department_id) selected @endif >{{$value->name}}</option>
			@endforeach
		</SELECT>
		</div>

		<button class="btn btn-success">Update</button>
  
</form>
</div>
@include('dash.footer')
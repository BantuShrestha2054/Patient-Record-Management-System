@include('dash.header')
<div class="mt-3 mb-3">
	<div CLASS="container">
		<h3>Create Follow up <small>
		<a href="{{route('admin1.follow')}}" class="btn btn-primary float-right">Back</a></small></h3>
	</div>
<form method="post" action="{{route('follow.store')}}">
  	
  	{{ csrf_field() }}

  	<div class="form-group">
		<label>Select Patient</label>
		<SELECT name="patient_id" class="form-control" required="">
			<option value="0">Select</option>
			@foreach($data as $value)
			<option value="{{$value->id}}">{{$value->name}}</option>
			@endforeach
		</SELECT>
		@if($errors->has('patient_id'))
        <div class="error-text">
            {{$errors->first('patient_id')}}
        </div>
  	    @endif
		</div>

		<div class="form-group">
		<label>Follow-up Date</label>
		<input type="date" name="date" class="form-control" required="">
		@if($errors->has('date'))
        <div class="error-text">
            {{$errors->first('date')}}
        </div>
  	    @endif
		</div>


	

		
		<button class="btn btn-success">Create</button>
  
</form>
</div>

@include('dash.footer')



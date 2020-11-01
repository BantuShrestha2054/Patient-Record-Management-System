<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table  border=1>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Quantity</th>
			<th>Created Date</th>
		</tr>

        @foreach($data as $d)
		<tr>
			<td>{{$d->id}}</td>
			<td>{{$d->name}}</td>
			<td>{{$d->price}}</td>
			<td>{{$d->quantity}}</td>
			<td>{{date('M d Y',strtotime($d->created_at))}}</td>
		</tr>
		@endforeach
	</table>
			

</body>
</html>
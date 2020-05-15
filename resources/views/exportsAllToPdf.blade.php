
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PDF from the Laravel Crud App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<table class="table table-bordered table-striped">
	<tr style="text-align:center;">
		<th width="10%">Image</th>
		<th width="10%">First Name</th>
		<th width="10%">Last Name</th>
		<th width="30%">Description</th>
		<th width="40%">Action</th>
	</tr>
	@foreach($data as $row)
		<tr>
			<td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="rounded-circle" width="100"  /></td>
			<td>{{ $row->first_name }}</td>
			<td>{{ $row->last_name }}</td>
			<td>{{ $row->desc }} {{$row->address}}</td>
			<td>
				
				<form action="{{ route('crud.destroy', $row->id) }}" method="post">
					<a href="{{ route('crud.downloadPdf', $row->id) }}"  class="btn btn-success">Download</a>
					<a href="{{ route('crud.show', $row->id) }}" class="btn btn-primary">Show</a>
					<a href="{{ route('crud.edit', $row->id) }}" class="btn btn-warning">Edit</a>
					@csrf
					@method('DELETE')
					<button type="submit" class="btn btn-danger"  onClick="return confirm('Are you sure you want to delete ?');">Delete</button>
					
				</form>
			</td>
		</tr>
	@endforeach
</table>
</body>
</html>
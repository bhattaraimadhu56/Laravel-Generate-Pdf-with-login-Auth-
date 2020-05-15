<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>
<h1>Details in pdf form</h1>
		<hr>
			<table class="table-striped table-hover">	
				@foreach($data as $row)
					<tr>
							<td colspan="2"> <img src="{{ public_path('images/'.$row->image ) }}"  class="rounded-circle" width="300"></td>
							<td>{{ $row->last_name }},{{ $row->first_name }} </td>
							<td>	{{$row->address}} <br/><br/>{{ $row->desc }} </td>
					</tr>
				@endforeach
			</table>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PDF from the Laravel Crud App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<div class="jumbotron text-center">
	
	<!-- method 1 (works on normal view but not in pdf) to access images files  -->
	<!-- <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" /> -->

		<!-- method 2 (works on normal view but not in pdf) to access images files  -->
	<!-- <img src="{{asset('images/'.$data->image )}}" height=100" width="100" align="center"> -->
	
	 <!-- Method 3(works in pdf but not in normal view) you can type the image name to check as well -->
	
	<!-- <img src="{{ public_path('images/589929718.png') }}"> -->
	<img src="{{ public_path('images/'.$data->image ) }}"  class="rounded-circle" width="300">
	
	<h2>{{ $data->last_name }}, {{ $data->first_name }} </h3>
	<br/>

	<h4> {{ $data->desc }}</h3>

</div>
</body>
</html>






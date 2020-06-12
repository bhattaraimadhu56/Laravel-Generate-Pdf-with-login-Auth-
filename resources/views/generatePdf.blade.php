

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PDF from the Laravel Crud App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body class="container-fluid ">

<div class="jumbotron text-center ">

<h2>{{ $data->last_name }}, {{ $data->first_name }} </h2>
<br/>
<h4> {{ $data->address}}</h4>
<h4> {{ $data->desc }}</h4>
<hr/>
<h3> The image uploaded from the sites are given below:</h3>
<hr/>
	
	<!-- method 1 (works on normal view but not in pdf) to access images files  -->
	<!-- <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" /> -->

		<!-- method 2 (works on normal view but not in pdf) to access images files  -->
	<!-- <img src="{{asset('images/'.$data->image )}}" height=100" width="100" align="center"> -->
	
	 <!-- Method 3(works in pdf but not in normal view) you can type the image name to check as well -->
	
	<!-- <img src="{{ public_path('images/589929718.png') }}"> -->
	<!-- <img src="{{ public_path('images/'.$data->image ) }}"  class="rounded-circle" width="300"> -->
<!-- ==============================================================Above are only while uploading single imaage without implode and explode method================================== -->
	<!-- --------------------------For Multiple Images-------------------------- -->
	<!-- For multiple Image Case1:  while showing only one image  -->
							<!-- (explode("|", $data->image)[0]) Works fine -->
	<!-- <img src="{{ public_path(     'images/'.(explode("|", $data->image)[0])       ) }}"  class="rounded-circle" width="300"> -->
	

		<!-- For multiple Image Case2:  while showing All Images image  -->
						<!-- https://stackoverflow.com/questions/59722228/laravel-multiple-images-explode-implode -->
						@foreach (explode('|', $data->image) as $img)
						<!--  to make image responsive according to device img-fluid -->
						<!-- <img src="{{ public_path('images/'.$img ) }}" class="img-thumbnail img-fluid" border="15" width="150" height="150"  />
						 -->

						 
	  <!-- <img class="card-img-top" src="holder.js/100px180/" alt=""> -->
	  <img src="{{ public_path('images/'.$img ) }}" class="mb-1 img-thumbnail img-fluid" border="15" width="25%" height="25%"  />

						@endforeach
	
						<hr/>
	

</div>
</body>
</html>






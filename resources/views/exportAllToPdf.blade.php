<!DOCTYPE html>
<html lang="en">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
<body class="container-fluid">

<div class="jumbotron text-center">
<h1>Details of All information  in pdf form</h1>
<hr/>
<?php $i=1;?>
				@foreach($data as $row)
			<h1><?php echo" Data $i";?></h1>	
				<?php $i++;?>
				<<h3>{{ $row->last_name }},{{ $row->first_name }}</h3>
				<h5>{{$row->address}} <br/><br/>{{ $row->desc }} </h5>
				
				<!-- While Uploding multiple images use following code  -->
					@foreach (explode('|', $row->image) as $img)
					<img src="{{ public_path('images/'.$img) }}" class="mb-1 img-thumbnail img-fluid" border="15" width="150" height="150"  />
					@endforeach

					<!-- =================Below code for image is While Uploading only the single image without using implode and explode ================== -->
															<!-- 

																		  <img src="{{ public_path('images/'.$row->image ) }}"  class="rounded-circle" width="300">
																		{{ $row->last_name }},{{ $row->first_name }} 
																			{{$row->address}} <br/><br/>{{ $row->desc }} 

													 -->

				<!-- =================Above code for image is While Uploading only the single image without using implode and explode ================== -->
				<br/> 
				<hr/>
				@endforeach
				

	</div>
</body>
</html>
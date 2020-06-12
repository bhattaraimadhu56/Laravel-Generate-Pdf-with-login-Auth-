@extends('parent')

@section('main')



<div class="jumbotron text-center">
	<div align="right">
		<a href="{{ route('crud.index') }}" class="btn btn-primary">Back</a>
	</div>
	<br />
	<!-- method 1 (works on normal view but not in pdf) to access images files  -->
	<!-- <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" /> -->

		<!-- method 2 (works on normal view but not in pdf) to access images files  -->\
		<!-- bootstrap 3 img-circle -->
		<!-- while uploading sungle images -->
	<!-- <img src="{{asset('images/'.$data->image )}}" class="img-circle" width="300"> -->
	
<!-- // For multiple images to get All images works -->
						
						@foreach (explode('|', $data->image) as $img)
						<img src="{{ URL::to('/') }}/images/{{ $img }}" class="mb-3 mt-4 img-thumbnail img-fluid" width="300" height="200"  />
						@endforeach








	<!-- Bootstrap 4 rounded-circle -->
	<!-- <img src="{{asset('images/'.$data->image )}}" class="rounded-circle" width="500"> -->
	
	 <!-- Method 3(works in pdf but not in normal view) you can type the image name to check as well -->
	
	<!-- <img src="{{ public_path('images/589929718.png') }}"> -->
	<!-- <img src="{{ public_path('images/'.$data->image ) }}" height=100" width="100" align="center"> -->
	
	<h3>First Name - {{ $data->first_name }} </h3>
	<h3>Last Name - {{ $data->last_name }}</h3>
	<h3> {{ $data->desc }}</h3>
</div>
@endsection

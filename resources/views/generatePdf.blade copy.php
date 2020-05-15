

@extends('parent')

@section('main')

<div class="jumbotron text-center">
	
	<!-- method 1 (works on normal view but not in pdf) to access images files  -->
	<!-- <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" /> -->

		<!-- method 2 (works on normal view but not in pdf) to access images files  -->
	<!-- <img src="{{asset('images/'.$data->image )}}" height=100" width="100" align="center"> -->
	
	 <!-- Method 3(works in pdf but not in normal view) you can type the image name to check as well -->
	
	<!-- <img src="{{ public_path('images/589929718.png') }}"> -->
	<img src="{{ public_path('images/'.$data->image ) }}"  class="img-circle" width="300">
	
	<h2>{{ $data->last_name }}, {{ $data->first_name }} </h3>
	<br/>

	<h4> {{ $data->desc }}</h3>

</div>
@endsection




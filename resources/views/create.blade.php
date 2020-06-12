@extends('parent')
<!-- For  -->
<!-- <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script> -->
  
@section('main')
@if($errors->any())
<div class="alert alert-danger">
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
</div>
@endif
<div align="right">
	<a href="{{ route('crud.index') }}" class="btn btn-primary">Back</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

	@csrf
	<div class="form-group">
		<label class="col-md-4 text-right">Enter First Name</label>
		<div class="col-md-8">
			<input type="text" name="first_name" class="form-control input-lg" placeholder="Enter First Name" />
			<br>
		</div>
	</div>
	
	<div class="form-group">
		<label class="col-md-4 text-right">Enter Last Name</label>
		<div class="col-md-8">
			<input type="text" name="last_name" class="form-control input-lg" placeholder="Enter Last Name" />
			<br>
		</div>
	</div>

	<div class="form-group">
		<label class="col-md-4 text-right">Enter Address</label>
		<div class="col-md-8">
			<input type="text" name="address" id ="address" class="form-control input-lg" placeholder="Enter your Address" />
			<br>
		</div>
		
	</div>
		
	<div class="form-group">
		<label class="col-md-4 text-right">Short Description</label>
		<div class="col-md-8">
			<!-- <input type="text" name="desc"  placeholder="Description" class="form-control input-lg" /> -->
			<textarea
                    class="form-control input-lg"
                    style="height:100px"
                    name="desc"
                    placeholder="Provide Short Description" >
					</textarea>
				<br>
	
		</div>
	</div>
	
	
	<div class="form-group">
		<label class="col-md-4 text-right">Select Profile Image</label>
		<div class="col-md-8">
			<!-- <input type="file" name="image" /> -->
			<input required type="file" class="form-control" name="image[]" placeholder="address" multiple>
		</div>
	</div>
	<br /><br /><br />
	<div class="form-group text-center pull-right">
		<input type="submit" name="add" class="btn btn-primary " value="Save Details" />
	</div>

</form>
<!-- javascript code  -->
<!-- <script src="https://maps.google.com/maps/api/js?key=Your_Google_Key; libraries=places&callback=initAutocomplete" type="text/javascript"></script> -->
<script src="https://maps.google.com/maps/api/js?key=AIzaSyDxTV3a6oL6vAaRookXxpiJhynuUpSccjY&amp;libraries=places&amp;callback=initAutocomplete" type="text/javascript"></script>
<script>
   google.maps.event.addDomListener(window, 'load', initialize);

   function initialize() {
       var input = document.getElementById('address');
       var autocomplete = new google.maps.places.Autocomplete(input);
       autocomplete.addListener('place_changed', function() {
       var place = autocomplete.getPlace(); 
	   // to get latitude and longitude  $('#latitude') means in which id we want to show
        //    $('#latitude').val(place.geometry['location'].lat());
        //    $('#longitude').val(place.geometry['location'].lng());
               });
   }
</script>




@endsection

